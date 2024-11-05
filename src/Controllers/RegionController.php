<?php

namespace Svr\Directories\Controllers;

use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Directories\Models\DirectoryCountriesRegion;
use Svr\Directories\Models\DirectoryCountries;

class RegionController extends AdminController
{
    protected $model;
    protected $title;
    protected $all_columns_obj;

    public function __construct()
    {
        $this->model = DirectoryCountriesRegion::class;
        $this->model_obj = new $this->model;                                                // Модель
        $this->trans = 'svr-directories-lang::directories.countries_regions.';                                                   // Переводы
        $this->title = trans($this->trans . 'countries_regions');                       // Заголовок
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

            match ($value_name) {
                // Индивидуальные настройки для отображения колонок:region_created_at, update_at, region_id
                'region_id' => $grid->column($value_name, 'ID')->sortable(),

                $this->model_obj->getCreatedAtColumn(), $this->model_obj->getUpdatedAtColumn() => $grid->column($value_name, $value_label)->display(function ($value) {
                    return Carbon::parse($value)->format('Y-m-d / H:m:s');
                })->help(trans(strtolower($this->trans.$value_name))),

                // Отображение остальных колонок
                default => $grid->column($value_name, $value_label)->help(trans(strtolower($this->trans.$value_name))),
            };
        }
        // Настройки фильтров
        $grid->filter(function (Grid\Filter $filter) {
            $filter->equal('country_id', 'COUNTRY_ID')
                ->select(function () {
                    $data = DirectoryCountries::all()
                        ->pluck('country_name', 'country_id');
                    // к названию региона добавляем id
                    foreach ($data as $key => $value) {
                        $data[$key] = ' ( ' . $key . ' ) ' . $value;
                    }
                    return $data->all();
                });
            $filter->equal('region_status', 'REGION_STATUS')
                ->select(function () {
                    return SystemStatusEnum::get_option_list();
                });

            $filter->equal('region_status_delete', 'REGION_STATUS_DELETE')
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
                // Индивидуальные настройки для отображения полей:created_at, update_at, raw_from_selex_beef_id
                $this->model_obj->getCreatedAtColumn(), $this->model_obj->getUpdatedAtColumn() => $show
                    ->field($value_name, $value_label)
                    ->xx_datetime(),

                'country_id' => $show->field('country_id', $value_label)
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
            });;
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
        $form->display('region_id', __('region_id'))
            ->help(trans(strtolower($this->trans . 'region_id')));
		$form->display('region_obl', __('region_obl'))
            ->help(trans(strtolower($this->trans . 'region_obl')));

        $form->select('country_id', __('country_id'))->options(function () {
            $data = DirectoryCountries::all()->pluck('country_name', 'country_id');
            // к названию региона добавляем id
            foreach ($data as $key => $value) {
                $data[$key] = ' ( ' . $key . ' ) ' . $value;
            }
            return $data->all();
            })
            ->help(trans(strtolower($this->trans . 'country_id')))
            ->rules('required', ['required' => trans('validation.required')]);

		$form->text('region_name', __('region_name'))
            ->help(trans(strtolower($this->trans . 'region_name')))
            ->rules('required|min:1|max:152', ['required' => trans('validation.required'), 'min' => trans('validation.min'), 'max' => trans('validation.max')]);

        $form->select('region_status', __('region_status'))
            ->options(SystemStatusEnum::get_option_list())
            ->help(trans(strtolower($this->trans . 'region_status')))
            ->default('enabled')
            ->rules('required', ['required' => trans('validation.required')]);

        $form->select('region_status_delete', __('region_status_delete'))
            ->options(SystemStatusDeleteEnum::get_option_list())
            ->help(trans(strtolower($this->trans . 'region_status_delete')))
            ->default('active')
            ->rules('required', ['required' => trans('validation.required')]);

		$form->display('created_at', __('created_at'))
            ->help(trans('svr.created_at'));
		$form->display('updated_at', __('updated_at'))
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
