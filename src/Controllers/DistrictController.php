<?php

namespace Svr\Directories\Controllers;

use App\Models\Directories\DirectoryCountriesRegion;
use App\Models\Directories\DirectoryCountriesRegionsDistrict;
use App\Models\Directories\DirectoryCountry;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Illuminate\Support\Facades\Schema;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;

class DistrictController extends AdminController
{
    protected $model;
    protected $title;
    protected $all_columns_obj;

    public function __construct()
    {
        $this->model = DirectoryCountriesRegionsDistrict::class;                            // Класс модели
        $this->model_obj = new $this->model;                                                // Модель
        $this->trans = 'directories' . '.';                                                   // Переводы
        $this->title = trans($this->trans . 'countries_regions_districts');            // Заголовок
        $this->all_columns_obj = Schema::getColumns($this->model_obj->getTable());         // Все столбцы
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
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
    public function create(Content $content)
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
    public function edit($id, Content $content)
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
    public function show($id, Content $content)
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
                // Индивидуальные настройки для отображения колонок:district_created_at, update_at, district_id
                'district_id' => $grid
                    ->column($value_name, 'ID')
                    ->sortable(),

                $this->model_obj->getCreatedAtColumn(), $this->model_obj->getUpdatedAtColumn() => $grid
                    ->column($value_name, $value_label)
                    ->xx_datetime()
                    ->help($trans),

                // Отображение остальных колонок
                default => $grid->column($value_name, $value_label)
                    ->help($trans),
            };
        }
        // Настройки фильтров
        $grid->filter(function (Grid\Filter $filter) {
            $filter->equal('country_ngos', 'COUNTRY_NGOS')
                ->select(function () {
                    $data = DirectoryCountry::all()
                        ->pluck('country_name', 'country_ngos');
                    // к названию региона добавляем id
                    foreach ($data as $key => $value) {
                        $data[$key] = ' ( ' . $key . ' ) ' . $value;
                    }
                    return $data->all();
                })->default(1);

            $filter->equal('region_id', 'REGION_ID')
                ->select(function () {
                    $data = DirectoryCountriesRegion::all()->pluck('region_name', 'region_id');
                    // к названию региона добавляем id
                    foreach ($data as $key => $value) {
                        $data[$key] = ' ( ' . $key . ' ) ' . $value;
                    }
                    return $data->all();
                });

            $filter->equal('district_status', 'DISTRICT_STATUS')
                ->select(function () {
                    return SystemStatusEnum::get_option_list();
                });

            $filter->equal('district_status_delete', 'DISTRICT_STATUS_DELETE')
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
    protected function detail($id)
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

                'country_ngos' => $show->field('country_ngos', $value_label)
                    ->xx_help(msg:$trans),

                'region_id' => $show->field('region_id', $value_label)
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
    protected function form()
    {
        $form = new Form($this->model_obj);
//        dd($this->all_columns_obj);
        $form->display('district_id', __('district_id'))->help(trans(strtolower($this->trans . 'district_id')));
        $form->display('district_rn', __('district_rn'))->help(trans(strtolower($this->trans . 'district_rn')));

        $form->select('region_id', __('region_id'))->options(function () {
            $data = DirectoryCountriesRegion::all()->pluck('region_name', 'region_id');
            // к названию региона добавляем id
            foreach ($data as $key => $value) {
                $data[$key] = ' ( ' . $key . ' ) ' . $value;
            }
            return $data->all();
        })
            ->help(trans(strtolower($this->trans . 'region_id')))
            ->rules('required', ['required' => trans('validation.required')]);

        $form->display('country_ngos', __('country_ngos'))
            ->customFormat(function ($id) {
            $name = DirectoryCountry::all()->where('country_ngos', $id)
                ->pluck('country_name', 'country_ngos')->first();
            return ' ( ' . $id . ' ) ' . $name;
        })
            ->help(trans(strtolower($this->trans . 'country_ngos')))
            ->rules('required', ['required' => trans('validation.required')]);

        $form->text('district_name', __('district_name'))->help(trans(strtolower($this->trans . 'district_name')))->rules('required|min:1|max:20', ['required' => trans('validation.required'), 'min' => trans('validation.min'), 'max' => trans('validation.max')]);

        $form->select('district_status', __('district_status'))
            ->options(SystemStatusEnum::get_option_list())
            ->help(trans(strtolower($this->trans . 'district_status')))
            ->default('enabled')
            ->rules('required', ['required' => trans('validation.required')]);

        $form->select('district_status_delete', __('district_status_delete'))
            ->options(SystemStatusDeleteEnum::get_option_list())
            ->help(trans(strtolower($this->trans . 'district_status_delete')))
            ->default('active')
            ->rules('required', ['required' => trans('validation.required')]);

        $form->display('district_created_at', __('district_created_at'))
            ->help(trans('svr.created_at'));;
        $form->display('update_at', __('update_at'))
            ->help(trans('svr.updated_at'));;

        // Отключить "Продолжить создание"
        $form->disableCreatingCheck();
        // Отключить "Удалить"
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
        });
        return $form;
    }
}
