<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Traits\GetTableName;

class DirectoryAnimalsSpecies extends Model
{
    use GetTableName;
    use HasFactory;

    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.animals_species';

    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'specie_id';

    /**
     * Поле даты создания строки
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * Поле даты обновления строки
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    /**
     * Значения полей по умолчанию
     *
     * @var array
     */
    protected $attributes
        = [
            'specied_status'        => 'enabled',
            'specied_status_delete' => 'active',
        ];

    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'specie_guid_self',                         // GUID (внутренний) видов животных
            'specie_guid_horriot',                      // GUID (хорриота) видов животных
            'specie_uuid_horriot',                      // UUID (хорриота) видов животных
            'specie_name',                              // Наименование видов животных
            'specie_selex_code',                        // Код видов животных  в Селэксе
            'specie_status',                            // Статус записи видов животных
            'specie_status_delete',                     // Статус удаления видов животных
            'created_at',                               // Дата создания видов животных
            'updated_at',                               // Дата обновления видов животных
        ];

    /**
     * Поля, которые нельзя менять сразу массивом
     *
     * @var array
     */
    protected $guarded
        = [
            'specie_id',                                // Идентификатор видов животных
        ];

    /**
     * @var array|string[]
     */
    protected array $dates
        = [
            'created_at',                   // Дата создания записи
            'updated_at',                   // Дата редактирования записи
        ];

    /**
     * Формат хранения столбцов даты модели.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * Создать запись
     * @param Request $request
     *
     * @return void
     */
    public function animalSpecieCreate(Request $request): void
    {
        $this->validateRequest($request);
        $this->fill($request->all())->save();
    }

    /**
     * Обновить запись
     * @param Request $request
     *
     * @return void
     */
    public function animalSpecieUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $specie = $this->find($id);
            if ($specie) {
                $specie->update($data);
            }
        }
    }

    /**
     * Валидация запроса
     * @param Request $request
     *
     * @return void
     */
    private function validateRequest(Request $request):void
    {
        $rules = $this->getValidationRules($request);
        $messages = $this->getValidationMessages();
        $request->validate($rules, $messages);
    }

    /**
     * Получить правила валидации
     *
     * @param Request $request
     *
     * @return array
     */
    private function getValidationRules(Request $request): array
    {
        $id = $request->input($this->primaryKey);

        return [
            $this->primaryKey      => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'specie_guid_self'     => 'required|string|min:3|max:64',
            'specie_guid_horriot'  => 'required|string|min:3|max:64',
            'specie_uuid_horriot'  => 'required|string|min:3|max:64',
            'specie_name'          => 'required|string|min:2|max:100',
            'specie_selex_code'    => 'nullable|string|max:64',
            'specie_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'specie_status_delete' => [
                'required',
                Rule::enum(SystemStatusDeleteEnum::class),
            ],
        ];
    }

    /**
     * Получить сообщения об ошибках валидации
     *
     * @return array
     */
    private function getValidationMessages(): array
    {
        return [
            $this->primaryKey      => trans('svr-core-lang::validation.required'),
            'specie_guid_self'     => trans('svr-core-lang::validation'),
            'specie_guid_horriot'  => trans('svr-core-lang::validation'),
            'specie_uuid_horriot'  => trans('svr-core-lang::validation'),
            'specie_name'          => trans('svr-core-lang::validation'),
            'specie_selex_code'    => trans('svr-core-lang::validation'),
            'specie_status'        => trans('svr-core-lang::validation'),
            'specie_status_delete' => trans('svr-core-lang::validation'),
        ];
    }

    /**
     * Список видов животных
     * @param $per_page
     * @param $cur_page
     * @param $search_data
     * @return array
     */
    public static function speciesList($per_page, $cur_page, $search_data): array
    {
        $where_array = [['specie_status', '=', SystemStatusEnum::ENABLED->value], ['specie_status_delete', '=', SystemStatusDeleteEnum::ACTIVE->value]];

        if (isset($search_data['specie_name'])) $where_array[] = ['specie_name', 'ilike', '%'.$search_data['specie_name'].'%'];

        Config::set('total_records', DB::table(self::getTableName())->where($where_array)->count());

        return DB::table(self::getTableName())->where($where_array)->limit($per_page)->offset($per_page*($cur_page-1))->get()->toArray();
    }
}
