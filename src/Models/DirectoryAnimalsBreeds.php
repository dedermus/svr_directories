<?php

namespace App\Models\Directory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryAnimalsBreeds extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.animals_breeds';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'breed_id';


	/**
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


	/**
	 * Поле даты создания строки
	 * @var string
	 */
	const CREATED_AT								= 'breed_created_at';


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
		'breed_status'									=> 'enabled',
		'breed_status_delete'							=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'breed_id',									//* Идентификатор породы животных
		'specie_id',								//* Идентификатор вида животных
		'breed_guid_self',							//* GUID (наш, внутренний) породы животных
		'breed_guid_horriot',						//* GUID (хорриота) породы животных
		'breed_uuid_horriot',						//* UUID (хорриота) породы животных
		'breed_name',								//* Наименование породы животных
		'breed_selex_code',							//* Код породы животных  в Селэксе
		'breed_status',								//* Статус породы животных
		'breed_status_delete',						//* Статус удаления породы животных
		'breed_created_at',							//* Дата создания породы животных
		'update_at',								//* дата последнего изменения строки записи */
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'breed_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'breed_created_at',
	];


	/**
	 * Вид животного
	 * @return array
	 */
	public function specie()
	{
		return $this->belongsTo(DirectoryAnimalsSpecies::class, 'specie_id', 'specie_id');
	}


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'breed_created_at'						=> 'timestamp',
		];
	}
}
