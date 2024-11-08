<?php

namespace Svr\Directories\Controllers;

use Illuminate\Support\Carbon;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Directories\Models\DirectoryOutTypes;

class OutTypesController extends AdminController
{
    /**
     * Экземпляр класса модели
     *
     * @var DirectoryOutTypes
     */
    private DirectoryOutTypes $directoryOutTypes;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->directoryOutTypes = new DirectoryOutTypes();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang::directories.out_types.title'));
            $content->description(trans('svr-directories-lang::directories.out_types.description'));
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
            $content->header(trans('svr-directories-lang::directories.out_types.title'));
            $content->description(trans('svr-directories-lang::directories.out_types.create'));
            $content->body($this->form());
        });
    }

    /**
     * Edit interface.
     *
     * @param string  $id
     * @param Content $content
     *
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->title(trans('svr-directories-lang::directories.out_types.title'))
            ->description(trans('svr-directories-lang::directories.out_types.edit'))
            ->row($this->form()->edit($id));
    }

    /**
     * Edit interface.
     *
     * @param string  $id
     * @param Content $content
     *
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->title(__('svr-directories-lang::directories.out_types.title'))
            ->description(__('svr-directories-lang::directories.out_types.description'))
            ->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Animals Species';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $directoryOutTypes = $this->directoryOutTypes;
        $grid = new Grid(new DirectoryOutTypes());
        $grid->column('out_type_id', __('svr-directories-lang::directories.out_types.out_type_id'))
            ->help(__('out_type_id'))
            ->sortable();
        $grid->column('out_type_guid_self', __('svr-directories-lang::directories.guid_self'))
            ->help(__('out_type_guid_self'))
            ->sortable();
        $grid->column('out_type_value_horriot', __('svr-directories-lang::directories.value_horriot'))
            ->help(__('out_type_value_horriot'))
            ->sortable();
        $grid->column('out_type_name', __('svr-directories-lang::directories.out_types.out_type_name'))
            ->help(__('out_type_name'))
            ->sortable();
        $grid->column('out_type_selex_code', __('svr-directories-lang::directories.selex_code'))
            ->help(__('out_type_selex_code'))
            ->sortable();
        $grid->column('out_type_status', __('svr-directories-lang::directories.item_status'))
            ->help(__('out_type_status'))
            ->sortable();
        $grid->column('out_type_status_delete', __('svr-directories-lang::directories.item_status_delete'))->help(__('out_type_status_delete'))->sortable();
        $grid->column('created_at', trans('svr-directories-lang::directories.created_at'))
            ->help(__('created_at'))
            ->display(function ($value) use ($directoryOutTypes) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryOutTypes->getDateFormat()
                );
            })->sortable();
        $grid->column('updated_at', trans('svr-directories-lang::directories.updated_at'))
            ->help(__('updated_at'))
            ->display(function ($value) use ($directoryOutTypes) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryOutTypes->getDateFormat()
                );
            })->sortable();
        $grid->disableCreateButton();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(DirectoryOutTypes::findOrFail($id));
        $show->field('out_type_id', __('svr-directories-lang::directories.out_types.out_type_id'));
        $show->field('out_type_guid_self', __('svr-directories-lang::directories.guid_self'));
        $show->field('out_type_value_horriot', __('svr-directories-lang::directories.value_horriot'));
        $show->field('out_type_name', __('svr-directories-lang::directories.out_types.out_type_name'));
        $show->field('out_type_selex_code', __('svr-directories-lang::directories.selex_code'));
        $show->field('out_type_status', __('svr-directories-lang::directories.item_status'));
        $show->field('out_type_status_delete', __('svr-directories-lang::directories.item_status_delete'));
        $show->field('created_at', trans('svr-directories-lang::directories.created_at'));
        $show->field('updated_at', trans('svr-directories-lang::directories.updated_at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryOutTypes());

        $form->text('out_type_id', __('svr-directories-lang::directories.out_types.out_type_id'))
            ->readonly(true)
            ->help(__('out_type_id'));
        $form->text('out_type_guid_self', __('svr-directories-lang::directories.guid_self'))
            ->readonly(true)
            ->required()
            ->help(__('guid_self'));
        $form->text('out_type_value_horriot', __('svr-directories-lang::directories.value_horriot'))
            ->help(__('out_type_value_horriot'))
            ->readonly(true)
            ->required();
        $form->text('out_type_name', __('svr-directories-lang::directories.out_types.out_type_name'))
            ->required()
            ->help(__('out_type_name'));
        $form->text('out_type_selex_code', __('svr-directories-lang::directories.selex_code'))
            ->help(__('selex_code'));
        $form->select('out_type_status', __('svr-directories-lang::directories.item_status'))
            ->help(__('out_type_status'))
            ->options(SystemStatusEnum::get_option_list())
            ->default('enabled')->required();
        $form->select('out_type_status_delete', trans('svr-directories-lang::directories.item_status_delete'))
            ->help(__('out_type_status_delete'))
            ->options(SystemStatusDeleteEnum::get_option_list())->default('active')
            ->required();

        $form->datetime('created_at', __('svr-directories-lang::directories.created_at'))
            ->disable()
            ->help(__('created_at'));;
        $form->datetime('updated_at', __('svr-directories-lang::directories.updated_at'))
            ->disable()
            ->help(__('updated_at'));;

        // обработка формы
        $form->saving(function (Form $form) {
            // создается текущая страница формы.
            if ($form->isCreating()) {
                (new DirectoryOutTypes)->outTypeCreate(request());
            } else // обновляется текущая страница формы.
            {
                if ($form->isEditing()) {
                    (new DirectoryOutTypes)->outTypeUpdate(request());
                }
            }
        });

        return $form;
    }
}
