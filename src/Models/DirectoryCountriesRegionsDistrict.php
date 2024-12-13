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

class DirectoryCountriesRegionsDistrict extends Model
{
	use GetTableName;
    use HasFactory;

    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.countries_regions_districts';

    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'district_id';

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
            'district_status'        => 'enabled',
            'district_status_delete' => 'active',
        ];

    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'district_rn',                              // Внешний код района
            'region_id',                                // Внутренний код области
            'country_ngos',                             // Внутренний код страны
            'district_name',                            // Название района
            'district_status',                          // Статус региона
            'district_status_delete',                   // Статус удаления региона
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
            'district_id',                               // Внутренний код района
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
    public function countriesRegionsDistrictCreate(Request $request): void
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
    public function countriesRegionsDistrictUpdate(Request $request): void
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
        $directoryCountryesRegion = new DirectoryCountriesRegion();

        return [
            $this->primaryKey        => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'district_rn'            => 'required|min_digits:1|max_digits:10',
            'region_id'              => [
                'required',
                Rule::exists('.' . $directoryCountryesRegion->getTable(), $directoryCountryesRegion->primaryKey)],
            'country_ngos'           => 'required|min_digits:1|max_digits:10',
            'district_name'          => 'required|string|max:20',
            'district_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'district_status_delete' => [
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
            $this->primaryKey        => trans('svr-core-lang::validation.required'),
            'district_rn'            => trans('svr-core-lang::validation'),
            'region_id'              => trans('svr-core-lang::validation'),
            'country_ngos'           => trans('svr-core-lang::validation'),
            'district_name'          => trans('svr-core-lang::validation'),
            'district_status'        => trans('svr-core-lang::validation'),
            'district_status_delete' => trans('svr-core-lang::validation'),
        ];
    }

    /**
     * Список районов
     * @param $per_page
     * @param $cur_page
     * @param $search_data
     * @return array
     */
    public static function districtsList($per_page, $cur_page, $search_data): array
    {
        $where_array = [['district_status', '=', SystemStatusEnum::ENABLED->value], ['district_status_delete', '=', SystemStatusDeleteEnum::ACTIVE->value]];

        if (isset($search_data['district_name'])) $where_array[] = ['district_name', 'ilike', '%'.$search_data['district_name'].'%'];
        if (isset($search_data['region_id'])) $where_array[] = ['region_id', '=', $search_data['region_id']];

        Config::set('total_records', DB::table(self::getTableName())->where($where_array)->count());

        return DB::table(self::getTableName())->where($where_array)->limit($per_page)->offset($per_page*($cur_page-1))->get()->toArray();
    }
}
