<?php

namespace Svr\Directories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Traits\GetTableName;

class DirectoryMarkTypes extends Model
{
    use GetTableName;
    use HasFactory;

    /**
     * Точное название таблицы с учетом схемы
     *
     * @var string
     */
    protected $table = 'directories.mark_types';

    /**
     * Первичный ключ таблицы (автоинкремент)
     *
     * @var string
     */
    protected $primaryKey = 'mark_type_id';

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
            'mark_type_status'        => 'enabled',
            'mark_type_status_delete' => 'active',
        ];

    /**
     * Поля, которые можно менять сразу массивом
     *
     * @var array
     */
    protected $fillable
        = [
            'mark_type_guid_self',                       // GUID (внутренний) видов номеров
            'mark_type_name',                            // Наименование видов номеров
            'mark_type_value_horriot',                   // Значение для хорриота видов номеров
            'mark_type_selex_code',                      // Код видов номеров в Селэксе
            'mark_type_status',                          // Статус
            'mark_type_status_delete',                   // Статус удаления
            'created_at',                                // Дата создания
            'updated_at',                                // Дата обновления
        ];


    /**
     * Поля, которые нельзя менять сразу массивом
     *
     * @var array
     */
    protected $guarded
        = [
            'mark_type_id',                               // Идентификатор видов номеров
        ];

    /**
     * Создать запись
     *
     * @param $request
     *
     * @return void
     */
    public function markTypeCreate(Request $request): void
    {
        $this->validateRequest($request);
        $this->fill($request->all())->save();
    }

    /**
     * Обновить запись
     *
     * @param $request
     *
     * @return void
     */
    public function markTypeUpdate(Request $request): void
    {
        $this->validateRequest($request);
        $data = $request->all();
        $id = $data[$this->primaryKey] ?? null;

        if ($id) {
            $markType = $this->find($id);
            if ($markType) {
                $markType->update($data);
            }
        }
    }

    /**
     * Валидация запроса
     *
     * @param Request $request
     *
     * @return void
     */
    private function validateRequest(Request $request): void
    {
        $rules = $this->getValidationRules($request);
        $messages = $this->getValidationMessages();
        $request->validateWithBag('default', $rules, $messages);
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

        return [
            $this->primaryKey         => [
                $request->isMethod('put') ? 'required' : '',
                Rule::exists('.' . $this->getTable(), $this->primaryKey),
            ],
            'mark_type_guid_self'     => 'required|string|min:3|max:64',
            'mark_type_value_horriot' => 'required|string|min:3|max:64',
            'mark_type_name'          => 'required|string|min:2|max:100',
            'mark_type_selex_code'    => 'nullable|string|max:64',
            'mark_type_status'        => [
                'required',
                Rule::enum(SystemStatusEnum::class),
            ],
            'mark_type_status_delete' => [
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
            $this->primaryKey         => trans('svr-core-lang::validation.required'),
            'mark_type_guid_self'     => trans('svr-core-lang::validation'),
            'mark_type_value_horriot' => trans('svr-core-lang::validation'),
            'mark_type_name'          => trans('svr-core-lang::validation'),
            'mark_type_selex_code'    => trans('svr-core-lang::validation'),
            'mark_type_status'        => trans('svr-core-lang::validation'),
            'mark_type_status_delete' => trans('svr-core-lang::validation'),
        ];
    }
}
