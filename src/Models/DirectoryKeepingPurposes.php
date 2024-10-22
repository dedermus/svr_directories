<?php

namespace App\Models\Directory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryKeepingPurposes extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.keeping_purposes';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'keeping_purpose_id';


	/**
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


	/**
	 * Поле даты создания строки
	 * @var string
	 */
	const CREATED_AT								= 'keeping_purpose_created_at';


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
		'keeping_purpose_status'						=> 'enabled',
		'keeping_purpose_status_delete'					=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'keeping_purpose_id',						//* Идентификатор целей содержания животных
		'keeping_purpose_guid_self',				//* GUID (внутренний) целей содержания животных
		'keeping_purpose_guid_horriot',				//* GUID (хорриота) целей содержания животных
		'keeping_purpose_uuid_horriot',				//* UUID (хорриота) целей содержания животных
		'keeping_purpose_name',						//* Наименование целей содержания животных
		'keeping_purpose_selex_code',				//* Код целей содержания животных в Селэксе
		'keeping_purpose_status',					//* Статус
		'keeping_purpose_status_delete',			//* Статус удаления
		'keeping_purpose_created_at',				//* Дата создания
		'update_at',								//* Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'keeping_purpose_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'keeping_purpose_created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'keeping_purpose_created_at'			=> 'timestamp',
		];
	}
}
