<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryCountry extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.countries';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'country_id';


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
		'country_status'								=> 'enabled',
		'country_status_delete'							=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'country_id',								// Идентификатор
		'country_guid_self',						// GUID (внутренний) государства
		'country_guid_horriot',						// GUID (хорриота) государства
		'country_uuid_horriot',						// UUID (хорриота) государства
		'country_ngos',								// Код страны внутренний
		'country_gos',								// Код страны внешний
		'country_name',								// Название страны по русски
		'country_kod',								// Буквенный код альфа-2
		'country_kod3',								// Буквенный код альфа-3
		'country_kod3_cifra',						// Цифровой код страны; ТРЕХЗНАЧНЫЙ
		'country_name_eng',							// Название страны по английски
		'country_status',							// Статус страны
		'country_status_delete',					// Статус удаления страны
		'created_at',						        // Дата создания
		'updated_at',								// Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'country_id',
	];

}
