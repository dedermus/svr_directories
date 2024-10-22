<?php

namespace App\Models\Directory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryOutBasises extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.out_basises';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'out_basis_id';


	/**
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


	/**
	 * Поле даты создания строки
	 * @var string
	 */
	const CREATED_AT								= 'out_basis_created_at';


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
		'out_basis_status'								=> 'enabled',
		'out_basis_status_delete'						=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'out_basis_id',								//* Идентификатор оснований выбытия
		'out_basis_guid_self',						//* GUID (внутренний) оснований выбытия
		'out_basis_name',							//* Наименование оснований выбытия
		'out_basis_value_horriot',					//* Значение для хорриота оснований выбытия
		'out_basis_selex_code',						//* Код оснований выбытия в Селэксе
		'out_basis_status',							//* Статус
		'out_basis_status_delete',					//* Статус удаления
		'out_basis_created_at',						//* Дата создания
		'update_at',								//* Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'out_basis_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'out_basis_created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'out_basis_created_at'					=> 'timestamp',
		];
	}
}
