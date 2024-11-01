<?php

namespace Svr\Directories\Models;

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
		'specied_status'								=> 'enabled',
		'specied_status_delete'							=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'specie_id',								// Идентификатор видов животных
		'specie_guid_self',							// GUID (внутренний) видов животных
		'specie_guid_horriot',						// GUID (хорриота) видов животных
		'specie_uuid_horriot',						// UUID (хорриота) видов животных
		'specie_name',								// Наименование видов животных
		'specie_selex_code',						// Код видов животных  в Селэксе
		'specie_status',							// Статус записи видов животных
		'specie_status_delete',						// Статус удаления видов животных
		'created_at',						        // Дата создания видов животных
		'updated_at',								// Дата обновления видов животных
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
		'created_at',
	];

    /**
     * @var array|string[]
     */
    protected array $dates
        = [
            'created_at',                   // Дата создания записи
            'updated_at',                   // Дата редактирования записи
        ];

    /**
     * Формат хранения столбцов даты модели.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * @var bool
     */
    public $timestamps = true;


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

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function animalSpecieCreate($request): void
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
    public function animalSpecieUpdate($request): void
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
                [$this->primaryKey => 'required|exists:.' . $this->getTable() . ',' . $this->primaryKey],
                [$this->primaryKey => trans('svr-core-lang::validation.required')],
            );
        }

        // specie_guid_self - Гуид в СВР
        $request->validate(
            ['specie_guid_self' => 'required|string|min:3|max:64'],
            ['specie_guid_self' => trans('svr-core-lang::validation')],
        );

        // specie_guid_horriot - Гуид в хорриот
        $request->validate(
            ['specie_guid_horriot' => 'required|string|min:3|max:64'],
            ['specie_guid_horriot' => trans('svr-core-lang::validation')],
        );

        // specie_uuid_horriot - ууид в хорриот
        $request->validate(
            ['specie_uuid_horriot' => 'required|string|min:3|max:64'],
            ['specie_uuid_horriot' => trans('svr-core-lang::validation')],
        );

        // specie_name - имя вида
        $request->validate(
            ['specie_name' => 'required|string|min:2|max:100'],
            ['specie_name' => trans('svr-core-lang::validation')],
        );

        // specie_status - Статус вида
        $request->validate(
            ['specie_status' => 'required'],
            ['specie_status' => trans('svr-core-lang::validation')],
        );

        // specie_status_delete - Статус удаления вида
        $request->validate(
            ['specie_status_delete' => 'required'],
            ['specie_status_delete' => trans('svr-core-lang::validation')],
        );
    }
}
