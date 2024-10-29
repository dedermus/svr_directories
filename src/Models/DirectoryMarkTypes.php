<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryMarkTypes extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.mark_types';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'mark_type_id';

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
		'mark_type_status'								=> 'enabled',
		'mark_type_status_delete'						=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'mark_type_id',								// Идентификатор видов номеров
		'mark_type_guid_self',						// GUID (внутренний) видов номеров
		'mark_type_name',							// Наименование видов номеров
		'mark_type_value_horriot',					// Значение для хорриота видов номеров
		'mark_type_selex_code',						// Код видов номеров в Селэксе
		'mark_type_status',							// Статус
		'mark_type_status_delete',					// Статус удаления
		'created_at',						        // Дата создания
		'updated_at',								// Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'mark_type_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'mark_type_created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'mark_type_created_at'					=> 'timestamp',
		];
	}

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function markTypeCreate($request): void
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
    public function markTypeUpdate($request): void
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

        // mark_type_guid_self - Гуид в СВР
        $request->validate(
            ['mark_type_guid_self' => 'required|string|min:3|max:64'],
            ['mark_type_guid_self' => trans('svr-core-lang::validation')],
        );

        // mark_type_value_horriot - значение в хорриот
        $request->validate(
            ['mark_type_value_horriot' => 'required|string|min:3|max:64'],
            ['mark_type_value_horriot' => trans('svr-core-lang::validation')],
        );

        // mark_type_name - имя
        $request->validate(
            ['mark_type_name' => 'required|string|min:2|max:100'],
            ['mark_type_name' => trans('svr-core-lang::validation')],
        );

        // mark_type_status - Статус
        $request->validate(
            ['mark_type_status' => 'required'],
            ['mark_type_status' => trans('svr-core-lang::validation')],
        );

        // mark_type_status_delete - Статус удаления
        $request->validate(
            ['mark_type_status_delete' => 'required'],
            ['mark_type_status_delete' => trans('svr-core-lang::validation')],
        );
    }
}
