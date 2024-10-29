<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


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
	 * На случай, если потребуется указать специфичное подключение для таблицы
	 * @var string
	 */
//	protected $connection							= 'mysql';


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
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'tool_location_created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'tool_location_created_at'				=> 'timestamp',
		];
	}

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function toolLocationCreate($request): void
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
    public function toolLocationUpdate($request): void
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
                [$this->primaryKey => 'required|exists:' . $this->getTable() . ',' . $this->primaryKey],
                [$this->primaryKey => trans('svr-core-lang::validation.required')],
            );
        }

        // tool_location_guid_self - Гуид в СВР
        $request->validate(
            ['tool_location_guid_self' => 'required|string|min:3|max:64'],
            ['tool_location_guid_self' => trans('svr-core-lang::validation')],
        );

        // tool_location_guid_horriot - Гуид в хорриот
        $request->validate(
            ['tool_location_guid_horriot' => 'required|string|min:3|max:64'],
            ['tool_location_guid_horriot' => trans('svr-core-lang::validation')],
        );

        // tool_location_uuid_horriot - ууид в хорриот
        $request->validate(
            ['tool_location_uuid_horriot' => 'required|string|min:3|max:64'],
            ['tool_location_uuid_horriot' => trans('svr-core-lang::validation')],
        );

        // tool_location_name - имя
        $request->validate(
            ['tool_location_name' => 'required|string|min:2|max:100'],
            ['tool_location_name' => trans('svr-core-lang::validation')],
        );

        // tool_location_status - Статус
        $request->validate(
            ['tool_location_status' => 'required'],
            ['tool_location_status' => trans('svr-core-lang::validation')],
        );

        // tool_location_status_delete - Статус удаления
        $request->validate(
            ['tool_location_status_delete' => 'required'],
            ['tool_location_status_delete' => trans('svr-core-lang::validation')],
        );
    }
}
