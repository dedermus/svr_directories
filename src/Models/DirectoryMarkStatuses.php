<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;

class DirectoryMarkStatuses extends Model
{
    use HasFactory;

	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.mark_statuses';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'mark_status_id';


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
		'mark_status_status'							=> 'enabled',
		'mark_status_status_delete'						=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'mark_status_guid_self',					// GUID (внутренний) видов маркирования
		'mark_status_name',						    // Наименование видов маркирования
		'mark_status_value_horriot',				// Значение для хорриота видов маркирования
		'mark_status_selex_code',					// Код видов маркирования в Селэксе
		'mark_status_status',						// Статус
		'mark_status_status_delete',				// Статус удаления
		'created_at',					            // Дата создания
		'updated_at',								// Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
        'mark_status_id',							// Идентификатор видов маркирования
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
    public function markStatusCreate(Request $request): void
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
    public function markStatusUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $modules_data = $this->find($id);
            if ($modules_data) {
                $modules_data->update($data);
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
            $this->primaryKey              => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'mark_status_guid_self' => 'required|string|min:3|max:64',
            'mark_status_value_horriot' => 'required|string|min:3|max:64',
            'mark_status_name' => 'required|string|min:2|max:100',
            'mark_status_selex_code' => 'nullable|string|max:64',
            'mark_status_status' => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'mark_status_status_delete' => [
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
            $this->primaryKey              => trans('svr-core-lang::validation.required'),
            'mark_status_guid_self' => trans('svr-core-lang::validation'),
            'mark_status_value_horriot' => trans('svr-core-lang::validation'),
            'mark_status_name' => trans('svr-core-lang::validation'),
            'mark_status_selex_code' => trans('svr-core-lang::validation'),
            'mark_status_status' => trans('svr-core-lang::validation'),
            'mark_status_status_delete' => trans('svr-core-lang::validation'),
        ];
    }
}
