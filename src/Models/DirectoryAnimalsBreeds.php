<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Traits\GetTableName;
use Svr\Directories\Models\DirectoryAnimalsSpecies;

class DirectoryAnimalsBreeds extends Model
{
    use GetTableName;
    use HasFactory;

    /**
     * Количество записей из запроса
     * @var int
     */
    public int $breeds_count = 0;
    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.animals_breeds';


    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'breed_id';

    /**
     * @var bool
     */
    public $timestamps = true;


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
            'breed_status'        => 'enabled',
            'breed_status_delete' => 'active',
        ];

    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'specie_id',                                // Идентификатор вида животных
            'breed_guid_self',                          // GUID (наш, внутренний) породы животных
            'breed_guid_horriot',                       // GUID (хорриота) породы животных
            'breed_uuid_horriot',                       // UUID (хорриота) породы животных
            'breed_name',                               // Наименование породы животных
            'breed_selex_code',                         // Код породы животных  в Селэксе
            'breed_status',                             // Статус породы животных
            'breed_status_delete',                      // Статус удаления породы животных
            'created_at',                               // Дата создания породы животных
            'updated_at',                               // дата последнего изменения строки записи */
        ];


    /**
     * Поля, которые нельзя менять сразу массивом
     *
     * @var array
     */
    protected $guarded
        = [
            'breed_id',                                  // Идентификатор породы животных
        ];

    /**
     * Формат хранения столбцов даты модели.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * Вид животного
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function specie()
    {
        return $this->belongsTo(DirectoryAnimalsSpecies::class, 'specie_id', 'specie_id');
    }

    /**
     * Создать запись
     *
     * @param Request $request
     *
     * @return void
     */
    public function animalBreedCreate(Request $request): void
    {
        $this->validateRequest($request);
        $this->fill($request->all())->save();
    }

    /**
     * Обновить запись
     *
     * @param Request $request
     *
     * @return void
     */
    public function animalBreedUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $breed = $this->find($id);
            if ($breed) {
                $breed->update($data);
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
        $directoryAnimalsSpecies = new DirectoryAnimalsSpecies();

        return [
            $this->primaryKey     => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'specie_id'           => [
                'required',
                Rule::exists('.'.$directoryAnimalsSpecies->getTable(), $directoryAnimalsSpecies->primaryKey)],
            'breed_guid_self'     => 'required|string|min:3|max:64',
            'breed_guid_horriot'  => 'required|string|min:3|max:64',
            'breed_uuid_horriot'  => 'required|string|min:3|max:64',
            'breed_name'          => 'required|string|min:2|max:100',
            'breed_selex_code'    => 'nullable|min_digits:1|max_digits:10',
            'breed_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'breed_status_delete' => [
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
            $this->primaryKey     => trans('svr-core-lang::validation.required'),
            'specie_id'           => trans('svr-core-lang::validation'),
            'breed_guid_self'     => trans('svr-core-lang::validation'),
            'breed_guid_horriot'  => trans('svr-core-lang::validation'),
            'breed_uuid_horriot'  => trans('svr-core-lang::validation'),
            'breed_name'          => trans('svr-core-lang::validation'),
            'breed_selex_code'    => trans('svr-core-lang::validation'),
            'breed_status'        => trans('svr-core-lang::validation'),
            'breed_status_delete' => trans('svr-core-lang::validation'),
        ];
    }


    /**
     * Список видов животных
     * @param $per_page
     * @param $cur_page
     * @param $search_data
     * @return array
     */
    public function breedsList($per_page, $cur_page, $search_data): array
    {
        $where_array = [['breed_status', '=', 'enabled'], ['breed_status_delete', '=', 'active']];

        if (isset($search_data['breed_name'])) $where_array[] = ['breed_name', 'ilike', '%'.$search_data['breed_name'].'%'];
        if (isset($search_data['specie_id'])) $where_array[] = ['specie_id', '=', $search_data['specie_id']];

        $this->breeds_count = DB::table($this->table)->where($where_array)->count();

        return DB::table($this->table)->where($where_array)->limit($per_page)->offset($per_page*($cur_page-1))->get()->toArray();
    }
}
