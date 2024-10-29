<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryGenders extends Model
{
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.genders';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'gender_id';


	/**
	 * Флаг наличия автообновляемых полей
	 * @var string
	 */
//	public $timestamps								= false;


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
	 * На случай, если потребуется указать специфичное подключение для таблицы
	 * @var string
	 */
//	protected $connection							= 'mysql';


	/**
	 * Значения полей по умолчанию
	 * @var array
	 */
	protected $attributes							= [
		'gender_status'								=> 'enabled',
		'gender_status_delete'						=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'gender_id ',								// Идентификатор полов животного
		'gender_guid_self',							// GUID (внутренний) полов животного
		'gender_name',								// Наименование полов животного
		'gender_value_horriot',						// Значение для хорриота полов животного
		'gender_selex_code',						// Код полов животного в Селэксе
		'gender_status',							// Статус полов животного
		'gender_status_delete',						// Статус удаления полов животного
		'created_at',						        // Дата создания
		'updated_at',								// Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'gender_id',
	];


	/**
	 * Массив системных скрытых полей
	 * @var array
	 */
	protected $hidden								= [
		'created_at',
	];


	/**
	 * Преобразование полей при чтении/записи
	 * @return array
	 */
	protected function casts(): array
	{
		return [
//			'update_at'								=> 'timestamp',
//			'gender_created_at'						=> 'timestamp',
		];
	}

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function animalGenderCreate($request): void
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
    public function animalGenderUpdate($request): void
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

        // gender_guid_self - Гуид в СВР
        $request->validate(
            ['gender_guid_self' => 'required|string|min:3|max:64'],
            ['gender_guid_self' => trans('svr-core-lang::validation')],
        );

        // gender_value_horriot - Гуид в хорриот
        $request->validate(
            ['gender_value_horriot' => 'required|string|min:3|max:64'],
            ['gender_value_horriot' => trans('svr-core-lang::validation')],
        );

        // gender_name - имя пола
        $request->validate(
            ['gender_name' => 'required|string|min:2|max:100'],
            ['gender_name' => trans('svr-core-lang::validation')],
        );

        // gender_status - Статус пола
        $request->validate(
            ['gender_status' => 'required'],
            ['gender_status' => trans('svr-core-lang::validation')],
        );

        // gender_status_delete - Статус удаления пола
        $request->validate(
            ['gender_status_delete' => 'required'],
            ['gender_status_delete' => trans('svr-core-lang::validation')],
        );
    }
}
