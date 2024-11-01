<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
		'mark_status_id',							// Идентификатор видов маркирования
		'mark_status_guid_self',					// GUID (внутренний) видов маркирования
		'mark_status_name ',						// Наименование видов маркирования
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
		'mark_status_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'mark_status_created_at',
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
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'mark_status_created_at'				=> 'timestamp',
		];
	}

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function markStatusCreate($request): void
    {
        $this->rules($request);
        $this->fill($request->all());
        $this->save();
    }

    /**
     * Обновить запись
     * @param $request
     *
     * @return void
     */
    public function markStatusUpdate($request): void
    {
        // валидация
        $this->rules($request);
        // получаем массив полей и значений и з формы
        $data = $request->all();
        if (!isset($data[$this->primaryKey])) return;
        // получаем id
        $id = $data[$this->primaryKey];
        // готовим сущность для обновления
        $modules_data = $this->find($id);
        // обновляем запись
        $modules_data->update($data);
    }

    /**
     * Валидация входных данных
     * @param $request
     *
     * @return void
     */
    private function rules($request): void
    {
        // получаем поля со значениями
        $data = $request->all();

        // получаем значение первичного ключа
        $id = (isset($data[$this->primaryKey])) ? $data[$this->primaryKey] : null;

        // id - Первичный ключ
        if (!is_null($id)) {
            $request->validate(
                [$this->primaryKey => 'required|exists:.' . $this->getTable() . ',' . $this->primaryKey],
                [$this->primaryKey => trans('svr-core-lang::validation.required')],
            );
        }

        // mark_status_guid_self - Гуид в СВР
        $request->validate(
            ['mark_status_guid_self' => 'required|string|min:3|max:64'],
            ['mark_status_guid_self' => trans('svr-core-lang::validation')],
        );

        // mark_status_value_horriot - Гуид в хорриот
        $request->validate(
            ['mark_status_value_horriot' => 'required|string|min:3|max:64'],
            ['mark_status_value_horriot' => trans('svr-core-lang::validation')],
        );

        // mark_status_name - имя
        $request->validate(
            ['mark_status_name' => 'required|string|min:2|max:100'],
            ['mark_status_name' => trans('svr-core-lang::validation')],
        );

        // mark_status_status - Статус
        $request->validate(
            ['mark_status_status' => 'required'],
            ['mark_status_status' => trans('svr-core-lang::validation')],
        );

        // mark_status_status_delete - Статус удаления
        $request->validate(
            ['mark_status_status_delete' => 'required'],
            ['mark_status_status_delete' => trans('svr-core-lang::validation')],
        );
    }
}
