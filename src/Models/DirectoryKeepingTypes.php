<?php

namespace App\Models\Directory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryKeepingTypes extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.keeping_types';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'keeping_type_id';


	/**
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


	/**
	 * Поле даты создания строки
	 * @var string
	 */
	const CREATED_AT								= 'keeping_type_created_at';


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
		'keeping_type_status'							=> 'enabled',
		'keeping_type_status_delete'					=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'keeping_type_id',							//* Идентификатор типов содержания животного
		'specie_id',								//* Идентификатор видов животных
		'keeping_type_guid_self',					//* GUID (внутренний) типов содержания животного
		'keeping_type_guid_horriot',				//* GUID (хорриота) типов содержания животного
		'keeping_type_uuid_horriot	',				//* UUID (хорриота) типов содержания животного
		'keeping_type_name',						//* Наименование типов содержания животного
		'keeping_type_selex_code',					//* Код типов содержания животного в Селэксе
		'keeping_type_status',						//* Статус
		'keeping_type_status_delete',				//* Статус удаления
		'keeping_type_created_at',					//* Дата создания
		'update_at',								//* Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'keeping_type_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'keeping_type_created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'keeping_type_created_at'				=> 'timestamp',
		];
	}
}
