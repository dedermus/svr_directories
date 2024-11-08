<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;

class DirectoryToolsLocations extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.tools_locations';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'tool_location_id';


	/**
	 * Поле даты создания строки
	 * @var string
	 */
	const CREATED_AT								= 'created_at';


	/**
	 * Поле даты обновления строки
	 * @var string
	 */
	const UPDATED_AT								= 'updated_at';


	/**
	 * Значения полей по умолчанию
	 * @var array
	 */
	protected $attributes							= [
		'tool_location_status'								=> 'enabled',
		'tool_location_status_delete'						=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'tool_location_id',							// Идентификатор места нанесения маркировки животного
		'tool_location_guid_self',					// GUID (наш, внутренний) места нанесения маркировки животного
		'tool_location_guid_horriot',				// GUID (хорриота) места нанесения маркировки животного
		'tool_location_uuid_horriot',				// UUID (хорриота) места нанесения маркировки животного
		'tool_location_name',						// Наименование места нанесения маркировки животного
		'tool_location_selex_code',					// Код места нанесения маркировки животного в Селэксе
		'tool_location_status',						// Статус
		'tool_location_status_delete',				// Статус удаления
		'created_at',					            // Дата создания
		'updated_at',								// Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'tool_location_id',
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
    public function toolLocationCreate(Request $request): void
    {
        $this->validateRequest($request);
        $this->fill($request->all())->save();
    }

    /**
     * Обновить запись
     * @param $Request $request
     *
     * @return void
     */
    public function toolLocationUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $location = $this->find($id);
            if ($location) {
                $location->update($data);
            }
        }
    }

    /**
     * Валидация запроса
     * @param Request $request
     */
    private function validateRequest(Application|Request $request)
    {
        $rules = $this->getValidationRules($request);
        $messages = $this->getValidationMessages();
        $request->validateWithBag('default', $rules, $messages);
    }

    /**
     * Получить правила валидации
     * @param Request $request
     * @return array
     */
    private function getValidationRules(Request $request): array
    {
        $id = $request->input($this->primaryKey);

        return [
            $this->primaryKey => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.'.$this->getTable(), $this->primaryKey),
            ],
            'tool_location_guid_self' => 'required|string|min:3|max:64',
            'tool_location_guid_horriot' => 'required|string|min:3|max:64',
            'tool_location_uuid_horriot' => 'required|string|min:3|max:64',
            'tool_location_name' => 'required|string|min:2|max:100',
            'tool_location_selex_code' => 'nullable|string|max:64',
            'tool_location_status' => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'tool_location_status_delete' => [
                'required',
                Rule::enum(SystemStatusDeleteEnum::class),
            ],
        ];
    }

    /**
     * Получить сообщения об ошибках валидации
     * @return array
     */
    private function getValidationMessages(): array
    {
        return [
            $this->primaryKey => trans('svr-core-lang::validation.required'),
            'tool_location_guid_self' => trans('svr-core-lang::validation'),
            'tool_location_guid_horriot' => trans('svr-core-lang::validation'),
            'tool_location_uuid_horriot' => trans('svr-core-lang::validation'),
            'tool_location_name' => trans('svr-core-lang::validation'),
            'tool_location_selex_code' => trans('svr-core-lang::validation'),
            'tool_location_status' => trans('svr-core-lang::validation'),
            'tool_location_status_delete' => trans('svr-core-lang::validation'),
        ];
    }
}
