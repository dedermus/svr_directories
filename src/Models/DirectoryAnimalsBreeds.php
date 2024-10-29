<?php

namespace Svr\Directories\Model;

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
     * @var bool
     */
    public $timestamps = true;


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
		'breed_status'									=> 'enabled',
		'breed_status_delete'							=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'breed_id',									// Идентификатор породы животных
		'specie_id',								// Идентификатор вида животных
		'breed_guid_self',							// GUID (наш, внутренний) породы животных
		'breed_guid_horriot',						// GUID (хорриота) породы животных
		'breed_uuid_horriot',						// UUID (хорриота) породы животных
		'breed_name',								// Наименование породы животных
		'breed_selex_code',							// Код породы животных  в Селэксе
		'breed_status',								// Статус породы животных
		'breed_status_delete',						// Статус удаления породы животных
		'created_at',							    // Дата создания породы животных
		'updated_at',								// дата последнего изменения строки записи */
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
		'created_at',
	];

    /**
     * Формат хранения столбцов даты модели.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

	/**
	 * Вид животного
	 * @return array
	 */
	public function specie()
	{
		return $this->belongsTo(DirectoryAnimalsSpecies::class, 'specie_id', 'specie_id');
	}

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function animalBreedCreate($request): void
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
    public function animalBreedUpdate($request): void
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

        // specie_id - идентификатор видас
        $request->validate(
            ['specie_id' => 'required|exists:directories.animals_species,specie_id'],
            ['specie_id' => trans('svr-core-lang::validation')],
        );

        // breed_guid_self - Гуид в СВР
        $request->validate(
            ['breed_guid_self' => 'required|string|min:3|max:64'],
            ['breed_guid_self' => trans('svr-core-lang::validation')],
        );

        // breed_guid_horriot - Гуид в хорриот
        $request->validate(
            ['breed_guid_horriot' => 'required|string|min:3|max:64'],
            ['breed_guid_horriot' => trans('svr-core-lang::validation')],
        );

        // breed_uuid_horriot - ууид в хорриот
        $request->validate(
            ['breed_uuid_horriot' => 'required|string|min:3|max:64'],
            ['breed_uuid_horriot' => trans('svr-core-lang::validation')],
        );

        // breed_name - имя породы
        $request->validate(
            ['breed_name' => 'required|string|min:2|max:100'],
            ['breed_name' => trans('svr-core-lang::validation')],
        );


        // breed_status - Статус породы
        $request->validate(
            ['breed_status' => 'required'],
            ['breed_status' => trans('svr-core-lang::validation')],
        );

        // breed_status_delete - Статус удаления породы
        $request->validate(
            ['breed_status_delete' => 'required'],
            ['breed_status_delete' => trans('svr-core-lang::validation')],
        );
    }
}
