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

class DirectoryCountries extends Model
{
    use GetTableName;
    use HasFactory;

    /**
     * Количество записей из запроса
     * @var int
     */
    public int $countries_count = 0;

    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.countries';

    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'country_id';

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
            'country_status'        => 'enabled',
            'country_status_delete' => 'active',
        ];

    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'country_guid_self',                        // GUID (внутренний) государства
            'country_guid_horriot',                     // GUID (хорриота) государства
            'country_uuid_horriot',                     // UUID (хорриота) государства
            'country_ngos',                             // Код страны внутренний
            'country_gos',                              // Код страны внешний
            'country_name',                             // Название страны по русски
            'country_kod',                              // Буквенный код альфа-2
            'country_kod3',                             // Буквенный код альфа-3
            'country_kod3_cifra',                       // Цифровой код страны; ТРЕХЗНАЧНЫЙ
            'country_name_eng',                         // Название страны по английски
            'country_status',                           // Статус страны
            'country_status_delete',                    // Статус удаления страны
            'created_at',                               // Дата создания
            'updated_at',                               // Дата обновления
        ];

    /**
     * Поля, которые нельзя менять сразу массивом
     *
     * @var array
     */
    protected $guarded
        = [
            'country_id',                                // Идентификатор
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
     *
     * @param Request $request
     *
     * @return void
     */
    public function countryCreate(Request $request): void
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
    public function countryUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $country = $this->find($id);
            if ($country) {
                $country->update($data);
            }
        }
    }

    /**
     * Валидация запроса
     *
     * @param Request $request
     *
     * @return void
     */
    private function validateRequest(Request $request): void
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
            $this->primaryKey => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'country_guid_self'     => 'nullable|string|max:64',
            'country_guid_horriot'  => 'nullable|string|max:64',
            'country_uuid_horriot'  => 'nullable|string|max:64',
            'country_ngos'          => 'nullable|min_digits:1|max_digits:8',
            'country_gos'           => 'nullable|min_digits:1|max_digits:8',
            'country_name'          => 'nullable|string|max:100',
            'country_kod'           => 'nullable|string|max:8',
            'country_kod3'          => 'nullable|string|max:8',
            'country_kod3_cifra'    => 'nullable|string|max:8',
            'country_name_eng'          => 'nullable|string|max:100',
            'country_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'country_status_delete' => [
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
            $this->primaryKey       => trans('svr-core-lang::validation.required'),
            'country_guid_self'     => trans('svr-core-lang::validation'),
            'country_guid_horriot'  => trans('svr-core-lang::validation'),
            'country_uuid_horriot'  => trans('svr-core-lang::validation'),
            'country_ngos'          => trans('svr-core-lang::validation'),
            'country_gos'           => trans('svr-core-lang::validation'),
            'country_name'          => trans('svr-core-lang::validation'),
            'country_kod'           => trans('svr-core-lang::validation'),
            'country_kod3'          => trans('svr-core-lang::validation'),
            'country_kod3_cifra'    => trans('svr-core-lang::validation'),
            'country_name_eng'      => trans('svr-core-lang::validation'),
            'country_status'        => trans('svr-core-lang::validation'),
            'country_status_delete' => trans('svr-core-lang::validation'),
        ];
    }

    /**
     * Список стран
     * @param $per_page
     * @param $cur_page
     * @param $search_data
     * @return array
     */
    public function countriesList($per_page, $cur_page, $search_data): array
    {
        $where_array = [['country_status', '=', 'enabled'], ['country_status_delete', '=', 'active']];

        if (isset($search_data['country_name'])) $where_array[] = ['country_name', 'ilike', '%'.$search_data['country_name'].'%'];

        $this->countries_count = DB::table($this->table)->where($where_array)->count();

        return DB::table($this->table)->where($where_array)->limit($per_page)->offset($per_page*($cur_page-1))->get()->toArray();
    }
}
