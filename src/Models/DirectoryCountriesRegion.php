<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;

class DirectoryCountriesRegion extends Model
{
    use HasFactory;

    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.countries_regions';

    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'region_id';

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
            'region_status'        => 'enabled',
            'region_status_delete' => 'active',
        ];

    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'region_obl',                // Внешний код региона
            'country_id',                // NGOS - внутренний код государства из таблицы DIRECTORY.COUNTRIES
            'region_name',               // Название региона
            'region_status',             // Статус региона
            'region_status_delete',      // Статус удаления региона
            'created_at',                // Дата создания
            'updated_at',                // Дата обновления
        ];

    /**
     * Поля, которые нельзя менять сразу массивом
     *
     * @var array
     */
    protected $guarded
        = [
            'region_id',                 // Инкремент
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
    public function countriesRegionCreate(Request $request): void
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
    public function countriesRegionUpdate(Request $request): void
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
        $directoryCountryes = new DirectoryCountries();

        return [
            $this->primaryKey => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'region_obl'      => 'required|min_digits:1|max_digits:10',
            'country_id'      => [
                'required',
                Rule::exists('.' . $directoryCountryes->getTable(), $directoryCountryes->primaryKey)],

            'region_name'          => 'required|string|max:152',
            'region_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'region_status_delete' => [
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
            'region_id'            => trans('svr-core-lang::validation'),
            'region_obl'           => trans('svr-core-lang::validation'),
            'country_id'           => trans('svr-core-lang::validation'),
            'region_name'          => trans('svr-core-lang::validation'),
            'region_status'        => trans('svr-core-lang::validation'),
            'region_status_delete' => trans('svr-core-lang::validation'),
        ];
    }
}
