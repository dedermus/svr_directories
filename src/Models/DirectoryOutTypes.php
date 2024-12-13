<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Traits\GetTableName;

class DirectoryOutTypes extends Model
{
    use GetTableName;
    use HasFactory;


	/**
	 * Точное название таблицы с учетом схемы
	 * @var string
	 */
	protected $table								= 'directories.out_types';


	/**
	 * Первичный ключ таблицы (автоинкремент)
	 * @var string
	 */
	protected $primaryKey							= 'out_type_id';


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
		'out_type_status'								=> 'enabled',
		'out_type_status_delete'						=> 'active',
	];


	/**
	 * Поля, которые можно менять сразу массивом
	 * @var array
	 */
	protected $fillable								= [
		'out_type_id',								// Идентификатор расходов
		'out_type_guid_self',						// GUID (внутренний) расходов
		'out_type_name',							// Наименование расходов
		'out_type_value_horriot',					// Значение для хорриота расходов
		'out_type_selex_code',						// Код расходов в Селэксе
		'out_type_status',							// Статус
		'out_type_status_delete',					// Статус удаления
		'created_at',						        // Дата создания
		'updated_at',								// Дата обновления
	];


	/**
	 * Поля, которые нельзя менять сразу массивом
	 * @var array
	 */
	protected $guarded								= [
		'out_type_id',
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
     * Создать запись
     *
     * @param Request $request
     *
     * @return void
     */
    public function outTypeCreate(Request $request): void
    {
        $this->validateRequest($request);
        $this->fill($request->all())->save();
    }

    /**
     * Обновить запись
     * @param Request $request
     *
     * @return void
     */
    public function outTypeUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $outType = $this->find($id);
            if ($outType) {
                $outType->update($data);
            }
        }
    }

    /**
     * Валидация запроса
     * @param Request $request
     */
    private function validateRequest(Application|Request $request)
    {
        $rules = $this->getValidationRules($request);
        $messages = $this->getValidationMessages();
        $request->validateWithBag('default', $rules, $messages);
    }

    /**
     * Получить правила валидации
     * @param Request $request
     * @return array
     */
    private function getValidationRules(Request $request): array
    {
        $id = $request->input($this->primaryKey);

        return [
            $this->primaryKey => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.'.$this->getTable(), $this->primaryKey),
            ],
            'out_type_guid_self' => 'required|string|min:3|max:64',
            'out_type_value_horriot' => 'required|string|min:3|max:64',
            'out_type_name' => 'required|string|min:2|max:100',
            'out_type_selex_code' => 'nullable|string|max:64',
            'out_type_status' => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'out_type_status_delete' => [
                'required',
                Rule::enum(SystemStatusDeleteEnum::class),
            ],
        ];
    }

    /**
     * Получить сообщения об ошибках валидации
     * @return array
     */
    private function getValidationMessages(): array
    {
        return [
            $this->primaryKey => trans('svr-core-lang::validation.required'),
            'out_type_guid_self' => trans('svr-core-lang::validation'),
            'out_type_value_horriot' => trans('svr-core-lang::validation'),
            'out_type_name' => trans('svr-core-lang::validation'),
            'out_type_selex_code' => trans('svr-core-lang::validation'),
            'out_type_status' => trans('svr-core-lang::validation'),
            'out_type_status_delete' => trans('svr-core-lang::validation'),
        ];
    }

    /**
     * Список видов выбытия животных
     * @param $per_page
     * @param $cur_page
     * @param $search_data
     * @return array
     */
    public static function outTypesList($per_page, $cur_page, $search_data): array
    {
        $where_array = [['out_type_status', '=', SystemStatusEnum::ENABLED->value], ['out_type_status_delete', '=', SystemStatusDeleteEnum::ACTIVE->value]];

        if (isset($search_data['out_type_name'])) $where_array[] = ['out_type_name', 'ilike', '%'.$search_data['out_type_name'].'%'];

        Config::set('total_records', DB::table(self::getTableName())->where($where_array)->count());

        return DB::table(self::getTableName())->where($where_array)->limit($per_page)->offset($per_page*($cur_page-1))->get()->toArray();
    }
}
