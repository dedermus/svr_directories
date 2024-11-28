<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Traits\GetTableName;

class DirectoryGenders extends Model
{
    use GetTableName;
    use HasFactory;

    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.genders';

    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'gender_id';

    /**
     * Поле даты создания строки
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * Поле даты обновления строки
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    /**
     * Значения полей по умолчанию
     *
     * @var array
     */
    protected $attributes
        = [
            'gender_status'        => 'enabled',
            'gender_status_delete' => 'active',
        ];

    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'gender_guid_self',                         // GUID (внутренний) полов животного
            'gender_name',                              // Наименование полов животного
            'gender_value_horriot',                     // Значение для хорриота полов животного
            'gender_selex_code',                        // Код полов животного в Селэксе
            'gender_status',                            // Статус полов животного
            'gender_status_delete',                     // Статус удаления полов животного
            'created_at',                               // Дата создания
            'updated_at',                               // Дата обновления
        ];

    /**
     * Поля, которые нельзя менять сразу массивом
     *
     * @var array
     */
    protected $guarded
        = [
            'gender_id ',                                // Идентификатор полов животного
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
    public function animalGenderCreate(Request $request): void
    {
        $this->validateRequest($request);
        $this->fill($request->all())->save();
    }

    /**
     * Обновить запись
     *
     * @param Request $request
     *
     * @return void
     */
    public function animalGenderUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $gender = $this->find($id);
            if ($gender) {
                $gender->update($data);
            }
        }
    }

    /**
     * Валидация запроса
     * @param Request $request
     *
     * @return void
     */
    private function validateRequest(Request $request):void
    {
        $rules = $this->getValidationRules($request);
        $messages = $this->getValidationMessages();
        $request->validate($rules, $messages);
    }

    /**
     * Получить правила валидации
     *
     * @param Request $request
     *
     * @return array
     */
    private function getValidationRules(Request $request): array
    {
        $id = $request->input($this->primaryKey);
        $directoryAnimalsSpecies = new DirectoryAnimalsSpecies();

        return [
            $this->primaryKey      => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'gender_guid_self'     => 'required|string|min:3|max:64',
            'gender_value_horriot' => 'required|string|min:3|max:64',
            'gender_name'          => 'required|string|min:2|max:100',
            'gender_selex_code'    => 'nullable|string|max:64',
            'gender_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'gender_status_delete' => [
                'required',
                Rule::enum(SystemStatusDeleteEnum::class),
            ],
        ];
    }

    /**
     * Получить сообщения об ошибках валидации
     *
     * @return array
     */
    private function getValidationMessages(): array
    {
        return [
            $this->primaryKey      => trans('svr-core-lang::validation.required'),
            'gender_guid_self'     => trans('svr-core-lang::validation'),
            'gender_value_horriot' => trans('svr-core-lang::validation'),
            'gender_name'          => trans('svr-core-lang::validation'),
            'gender_selex_code'    => trans('svr-core-lang::validation'),
            'gender_status'        => trans('svr-core-lang::validation'),
            'gender_status_delete' => trans('svr-core-lang::validation'),
        ];
    }
}
