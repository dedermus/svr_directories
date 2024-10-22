<?php

namespace App\Models\Directory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryAnimalsSpecies extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.animals_species';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'specie_id';


	/**
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


	/**
	 * Поле даты создания строки
	 * @var string
	 */
	const CREATED_AT								= 'specie_created_at';


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
		'specied_status'								=> 'enabled',
		'specied_status_delete'							=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'specie_id',								//* Идентификатор видов животных
		'specie_guid_self',							//* GUID (внутренний) видов животных
		'specie_guid_horriot',						//* GUID (хорриота) видов животных
		'specie_uuid_horriot',						//* UUID (хорриота) видов животных
		'specie_name',								//* Наименование видов животных
		'specie_selex_code',						//* Код видов животных  в Селэксе
		'specie_status',							//* Статус записи видов животных
		'specie_status_delete',						//* Статус удаления видов животных
		'specie_created_at',						//* Дата создания видов животных
		'update_at',								//* Дата обновления видов животных
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'specie_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'specie_created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'specie_created_at'						=> 'timestamp',
		];
	}
}
