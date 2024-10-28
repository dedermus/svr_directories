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

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function keepingPurposeCreate($request): void
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
    public function keepingPurposeUpdate($request): void
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

        // keeping_purpose_guid_self - Гуид в СВР
        $request->validate(
            ['keeping_purpose_guid_self' => 'required|string|min:3|max:64'],
            ['keeping_purpose_guid_self' => trans('svr-core-lang::validation')],
        );

        // keeping_purpose_guid_horriot - Гуид в хорриот
        $request->validate(
            ['keeping_purpose_guid_horriot' => 'required|string|min:3|max:64'],
            ['keeping_purpose_guid_horriot' => trans('svr-core-lang::validation')],
        );

        // keeping_purpose_uuid_horriot - ууид в хорриот
        $request->validate(
            ['keeping_purpose_uuid_horriot' => 'required|string|min:3|max:64'],
            ['keeping_purpose_uuid_horriot' => trans('svr-core-lang::validation')],
        );

        // keeping_purpose_name - имя
        $request->validate(
            ['keeping_purpose_name' => 'required|string|min:2|max:100'],
            ['keeping_purpose_name' => trans('svr-core-lang::validation')],
        );

        // keeping_purposee_status - Статус
        $request->validate(
            ['keeping_purposee_status' => 'required'],
            ['keeping_purposee_status' => trans('svr-core-lang::validation')],
        );

        // keeping_purpose_status_delete - Статус удаления
        $request->validate(
            ['keeping_purpose_status_delete' => 'required'],
            ['keeping_purpose_status_delete' => trans('svr-core-lang::validation')],
        );
    }
}
