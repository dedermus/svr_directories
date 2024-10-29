<?php

namespace Svr\Directories\Controllers;

use App\Models\Directories\DirectoryCountry;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;

class CountryController extends AdminController
{
    protected $model;
    protected $model_obj;
    protected $title;
    protected $trans;
    protected $all_columns_obj;

    public function __construct()
    {
        $this->model = DirectoryCountry::class;
        $this->model_obj = new $this->model;                                                // Модель
        $this->trans = 'directories'.'.';                                                   // Переводы
        $this->title = trans($this->trans . 'countries');                               // Заголовок
        $this->all_columns_obj = Schema::getColumns($this->model_obj->getTable());          // Все столбцы
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content): Content
    {
        return Admin::content(function (Content $content) {
            $content->header($this->title);
            $content->description(trans('admin.description'));
            $content->body($this->grid());
        });
    }

    /**
     * Create interface.
     *
     * @param Content $content
     */
    public function create(Content $content): Content
    {
        return Admin::content(function (Content $content) {
            $content->header($this->title);
            $content->description(trans('admin.create'));
            $content->body($this->form());
        });
    }

    /**
     * Edit interface.
     *
     * @param string $id
     * @param Content $content
     *
     * @return Content
     */
    public function edit($id, Content $content): Content
    {
        return $content
            ->title($this->title)
            ->description(trans('admin.edit'))
            ->row($this->form()->edit($id));
    }

    /**
     * Show interface.
     *
     * @param string $id
     * @param Content $content
     *
     * @return Content
     */
    public function show($id, Content $content): Content
    {
        return $content
            ->title($this->title)
            ->description(trans('admin.show'))

            // Оформление подсказок (xx_help)
            ->css('.row .help-block {
                font-size: .9rem;
                color: #72777b
            }')
            ->body($this->detail($id));
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $grid = new Grid($this->model_obj);
        foreach ($this->all_columns_obj as $key => $value) {
            $value_name = $value['name'];
            $value_label = strtoupper($value_name);
            $trans = trans(strtolower($this->trans . $value_name));
            match ($value_name) {
                // Индивидуальные настройки для отображения колонок:country_created_at, update_at, country_id
                'country_id' => $grid->column($value_name, 'ID')->sortable(),

                $this->model_obj->getCreatedAtColumn(), $this->model_obj->getUpdatedAtColumn() => $grid
                    ->column($value_name, $value_label)
                    ->display(function ($value) {return Carbon::parse($value);})
                    ->xx_datetime()
                    ->help($trans),

                // Отображение остальных колонок
                default => $grid->column($value_name, $value_label)->help($trans),
            };
        }
        // Настройки фильтров
        $grid->filter(function (Grid\Filter $filter) {

            $filter->equal('country_status', 'COUNTRY_STATUS')
                ->select(function () {
                    return SystemStatusEnum::get_option_list();
                });

            $filter->equal('country_status_delete', 'COUNTRY_STATUS_DELETE')
                ->select(function () {
                    return SystemStatusDeleteEnum::get_option_list();
                });

        });

        $grid->tools(function (Grid\Tools $tools) {
            $tools->batch(function (Grid\Tools\BatchActions $actions) {
                $actions->disableDelete();
            });
        });
        // Отключение кнопки создания
        $grid->disableCreateButton();
        // Отключение "удаление" у строк
        $grid->actions(function (Grid\Displayers\Actions\Actions $actions) {
            $actions->disableDelete();
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id): Show
    {
        $show = new Show($this->model::findOrFail($id));
        foreach ($this->all_columns_obj as $key => $value) {
            $value_name = $value['name'];
            $value_label = $value_name;
            $trans = trans(strtolower($this->trans . $value_name));
            match ($value_name) {
                // Индивидуальные настройки для отображения полей:created_at, update_at
                $this->model_obj->getCreatedAtColumn(), $this->model_obj->getUpdatedAtColumn() => $show
                    ->field($value_name, $value_label)
                    ->xx_datetime(),

                'country_id' => $show->field($value_name, $value_label)
                    ->xx_help(msg:$trans),

                // Отображение остальных полей
                default => $show->field($value_name, $value_label)
                    ->xx_help(msg:$trans),
            };
        }
        // Убрать кнопку "Удалить"
        $show->panel()
            ->tools(function ($tools) {
                $tools->disableDelete();
            });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(): Form
    {
        $form = new Form($this->model_obj);

        $form->display('country_id', __('country_id'))
            ->help(trans(strtolower($this->trans . 'country_id')));
		$form->text('country_guid_self', __('country_guid_self'))
            ->help(trans(strtolower($this->trans . 'country_guid_self')))
            ->rules('max:64', ['max' => trans('validation.max')]);
		$form->text('country_guid_horriot', __('country_guid_horriot'))
            ->help(trans(strtolower($this->trans . 'country_guid_horriot')))
            ->rules('max:64', ['max' => trans('validation.max')]);
		$form->text('country_uuid_horriot', __('country_uuid_horriot'))
            ->help(trans(strtolower($this->trans . 'country_uuid_horriot')))
            ->rules('max:64', ['max' => trans('validation.max')]);
		$form->number('country_ngos', __('country_ngos'))
            ->help(trans(strtolower($this->trans . 'country_ngos')));
		$form->number('country_gos', __('country_gos'))
            ->help(trans(strtolower($this->trans . 'country_gos')));
		$form->text('country_name', __('country_name'))
            ->help(trans(strtolower($this->trans . 'country_name')))
            ->rules('max:100', ['max' => trans('validation.max')]);
		$form->text('country_kod', __('country_kod'))
            ->help(trans(strtolower($this->trans . 'country_kod')))
            ->rules('max:8', ['max' => trans('validation.max')]);
		$form->text('country_kod3', __('country_kod3'))
            ->help(trans(strtolower($this->trans . 'country_kod3')))
            ->rules('max:8', ['max' => trans('validation.max')]);
		$form->text('country_kod3_cifra', __('country_kod3_cifra'))
            ->help(trans(strtolower($this->trans . 'country_kod3_cifra')))
            ->rules('max:8', ['max' => trans('validation.max')]);
		$form->text('country_name_eng', __('country_name_eng'))
            ->help(trans(strtolower($this->trans . 'country_name_eng')))
            ->rules('max:100', ['max' => trans('validation.max')]);

        $form->select('country_status', __('country_status'))
            ->options(SystemStatusEnum::get_option_list())
            ->help(trans(strtolower($this->trans . 'country_status')))
            ->default('enabled')
            ->rules('required', ['required' => trans('validation.required')]);

        $form->select('country_status_delete', __('country_status_delete'))
            ->options(SystemStatusDeleteEnum::get_option_list())
            ->help(trans(strtolower($this->trans . 'country_status_delete')))
            ->default('active')
            ->rules('required', ['required' => trans('validation.required')]);



		$form->display('country_created_at', __('country_created_at'))
            ->help(trans('svr.created_at'));
		$form->display('update_at', __('update_at'))
            ->help(trans('svr.updated_at'));

        // Отключить "Продолжить создание"
        $form->disableCreatingCheck();
        // Отключить "Удалить"
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
        });
        return $form;
    }
}
