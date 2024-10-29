<?php

namespace Svr\Directories\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryCountriesRegion extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.countries_regions';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'region_id';



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
		'region_status'									=> 'enabled',
		'region_status_delete'							=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'region_id',								// Инкремент
		'region_obl',								// Внешний код региона
		'country_id',								// NGOS - внутренний код государства из таблицы DIRECTORY.COUNTRIES
		'region_name',								// Название региона
		'region_status',							// Статус региона
		'region_status_delete',						// Статус удаления региона
		'created_at',						        // Дата создания
		'updated_at',								// Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'region_id',
	];



}
