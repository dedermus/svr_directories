<?php

namespace App\Models\Directory;

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
	const CREATED_AT								= 'tool_location_created_at';


	/**
	 * Поле даты обновления строки
	 * @var string
	 */
	const UPDATED_AT								= 'update_at';


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
		'tool_location_id',							//* Идентификатор места нанесения маркировки животного
		'tool_location_guid_self',					//* GUID (наш, внутренний) места нанесения маркировки животного
		'tool_location_guid_horriot',				//* GUID (хорриота) места нанесения маркировки животного
		'tool_location_uuid_horriot',				//* UUID (хорриота) места нанесения маркировки животного
		'tool_location_name',						//* Наименование места нанесения маркировки животного
		'tool_location_selex_code',					//* Код места нанесения маркировки животного в Селэксе
		'tool_location_status',						//* Статус
		'tool_location_status_delete',				//* Статус удаления
		'tool_location_created_at',					//* Дата создания
		'update_at',								//* Дата обновления
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
}
