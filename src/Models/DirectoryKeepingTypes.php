<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Traits\GetTableName;

class DirectoryKeepingTypes extends Model
{
    use GetTableName;
    use HasFactory;

    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.keeping_types';

    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'keeping_type_id';

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
            'keeping_type_status'        => 'enabled',
            'keeping_type_status_delete' => 'active',
        ];


    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'specie_id',                                // Идентификатор видов животных
            'keeping_type_guid_self',                    // GUID (внутренний) типов содержания животного
            'keeping_type_guid_horriot',                // GUID (хорриота) типов содержания животного
            'keeping_type_uuid_horriot	',                // UUID (хорриота) типов содержания животного
            'keeping_type_name',                        // Наименование типов содержания животного
            'keeping_type_selex_code',                    // Код типов содержания животного в Селэксе
            'keeping_type_status',                        // Статус
            'keeping_type_status_delete',                // Статус удаления
            'created_at',                                // Дата создания
            'updated_at',                                // Дата обновления
        ];


    /**
     * Поля, которые нельзя менять сразу массивом
     *
     * @var array
     */
    protected $guarded
        = [
            'keeping_type_id',                            // Идентификатор типов содержания животного
        ];


    /**
     * Массив системных скрытых полей
     *
     * @var array
     */
    protected $hidden
        = [
            'created_at',
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
    public function keepingTypeCreate(Request $request): void
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
    public function keepingTypeUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $keepingType = $this->find($id);
            if ($keepingType) {
                $keepingType->update($data);
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
            $this->primaryKey            => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'keeping_type_guid_self'     => 'required|string|min:3|max:64',
            'keeping_type_guid_horriot'  => 'required|string|min:3|max:64',
            'keeping_type_uuid_horriot'  => 'required|string|min:3|max:64',
            'keeping_type_name'          => 'required|string|min:2|max:100',
            'keeping_type_selex_code'    => 'nullable|string|max:64',
            'keeping_type_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'keeping_type_status_delete' => [
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
            $this->primaryKey            => trans('svr-core-lang::validation.required'),
            'keeping_type_guid_self'     => trans('svr-core-lang::validation'),
            'keeping_type_guid_horriot'  => trans('svr-core-lang::validation'),
            'keeping_type_uuid_horriot'  => trans('svr-core-lang::validation'),
            'keeping_type_name'          => trans('svr-core-lang::validation'),
            'keeping_type_selex_code'    => trans('svr-core-lang::validation'),
            'keeping_type_status'        => trans('svr-core-lang::validation'),
            'keeping_type_status_delete' => trans('svr-core-lang::validation'),
        ];
    }
}
