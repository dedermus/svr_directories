<?php

namespace App\Models\Directory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryMarkToolTypes extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.mark_tool_types';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'mark_tool_type_id';


	/**
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


	/**
	 * Поле даты создания строки
	 * @var string
	 */
	const CREATED_AT								= 'mark_tool_type_created_at';


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
		'mark_tool_type_status'							=> 'enabled',
		'mark_tool_type_status_delete'					=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'mark_tool_type_id',						//* Идентификатор типов маркирования
		'mark_tool_type_guid_self',					//* GUID (внутренний) типов маркирования
		'mark_tool_type_name',						//* Наименование типов маркирования
		'mark_tool_type_value_horriot',				//* Значение для хорриота типов маркирования
		'mark_tool_type_selex_code',				//* Код типов маркирования в Селэксе
		'mark_tool_type_status',					//* Статус
		'mark_tool_type_status_delete',				//* Статус удаления
		'mark_tool_type_created_at',				//* Дата создания
		'update_at',								//* Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'mark_tool_type_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'mark_tool_type_created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'mark_tool_type_created_at'				=> 'timestamp',
		];
	}
}
