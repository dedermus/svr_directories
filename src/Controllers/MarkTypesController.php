<?php

namespace Svr\Directories\Controllers;

use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Svr\Directories\Model\DirectoryMarkTypes;

class MarkTypesController extends AdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang:directories.mark_types.title'));
            $content->description(trans('svr-directories-lang:directories.mark_types.description'));
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
            $content->header(trans('svr-directories-lang:directories.mark_types.title'));
            $content->description(trans('svr-directories-lang:directories.mark_types.create'));
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
            ->title(trans('svr-directories-lang:directories.mark_types.title'))
            ->description(trans('svr-directories-lang:directories.mark_types.edit'))
            ->row($this->form()->edit($id));
    }

    /**
     * Edit interface.
     *
     * @param string $id
     * @param Content $content
     *
     * @return Content
     */
    public function show($id, Content $content)
    {
		return $content
			->title(__('svr-directories-lang:directories.mark_types.title'))
			->description(__('svr-directories-lang:directories.mark_types.description'))
			->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Mark Type';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $grid = new Grid(new DirectoryMarkTypes());
        $grid->column('mark_type_id', __('svr-directories-lang:directories.mark_types.mark_type_id'))->sortable();
		$grid->column('mark_type_guid_self', __('svr-directories-lang:directories.guid_self'))->sortable();
		$grid->column('mark_type_value_horriot', __('svr-directories-lang:directories.value_horriot'))->sortable();
		$grid->column('mark_type_name', __('svr-directories-lang:directories.mark_types.mark_type_name'))->sortable();
		$grid->column('mark_type_selex_code', __('svr-directories-lang:directories.selex_code'))->sortable();
		$grid->column('mark_type_status', __('svr-directories-lang:directories.item_status'))->sortable();
		$grid->column('mark_type_status_delete', __('svr-directories-lang:directories.item_status_delete'))->sortable();

		$grid->disableCreateButton();
		$grid->disableExport();

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
        $show = new Show(DirectoryMarkTypes::findOrFail($id));
        $show->field('mark_type_id', __('svr-directories-lang:directories.mark_types.mark_type_id'));
        $show->field('mark_type_guid_self', __('svr-directories-lang:directories.guid_self'));
        $show->field('mark_type_value_horriot', __('svr-directories-lang:directories.value_horriot'));
        $show->field('mark_type_name', __('svr-directories-lang:directories.mark_types.mark_type_name'));
        $show->field('mark_type_selex_code', __('svr-directories-lang:directories.selex_code'));
        $show->field('mark_type_status', __('svr-directories-lang:directories.item_status'));
        $show->field('mark_type_status_delete', __('svr-directories-lang:directories.item_status_delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryMarkTypes());

		$form->text('mark_type_id', __('svr-directories-lang:directories.mark_types.mark_type_id'))
			->readonly(true)
			->help(__('svr-directories-lang:directories.mark_types.mark_type_id'));
		$form->text('mark_type_guid_self', __('svr-directories-lang:directories.guid_self'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang:directories.guid_self'));
		$form->text('mark_type_value_horriot', __('svr-directories-lang:directories.value_horriot'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang:directories.value_horriot'));
		$form->text('mark_type_name', __('svr-directories-lang:directories.mark_types.mark_type_name'))
			->required()
			->help(__('svr-directories-lang:directories.mark_types.mark_type_name'));
		$form->text('mark_type_selex_code', __('svr-directories-lang:directories.selex_code'))
			->help(__('svr-directories-lang:directories.selex_code'));
		$form->select('mark_type_status', __('svr-directories-lang:directories.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->required();
		$form->select('mark_type_status_delete', trans('svr-directories-lang:directories.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
			->readonly(true)->required();

        $form->date('created_at', __('svr-directories-lang:directories.created_at'));
        $form->date('updated_at', __('svr-directories-lang:directories.updated_at'));

        // обработка формы
        $form->saving(function (Form $form)
        {
            // создается текущая страница формы.
            if ($form->isCreating())
            {
                (new DirectoryMarkTypes)->markTypeCreate(request());
            } else
                // обновляется текущая страница формы.
                if ($form->isEditing())
                {
                    (new DirectoryMarkTypes)->markTypeUpdate(request());
                }
        });

        return $form;
    }
}
