<?php

namespace App\Admin\Controllers\Directory;

use App\Models\Directory\DirectoryMarkToolTypes;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;


class MarkToolTypesController extends AdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr.directory.mark_tool_types.title'));
            $content->description(trans('svr.directory.mark_tool_types.description'));
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
            $content->header(trans('svr.directory.mark_tool_types.title'));
            $content->description(trans('svr.directory.mark_tool_types.create'));
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
		//dd($this->form()->edit($id));

        return $content
            ->title(trans('svr.directory.mark_tool_types.title'))
            ->description(trans('svr.directory.mark_tool_types.edit'))
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
			->title(__('svr.directory.mark_tool_types.title'))
			->description(__('svr.directory.mark_tool_types.description'))
			->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Mark Tool Type';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $grid = new Grid(new DirectoryMarkToolTypes());
        $grid->column('mark_tool_type_id', __('svr.directory.mark_tool_types.mark_tool_type_id'))->sortable();
		$grid->column('mark_tool_type_guid_self', __('svr.directory.guid_self'))->sortable();
		$grid->column('mark_tool_type_value_horriot', __('svr.directory.value_horriot'))->sortable();
		$grid->column('mark_tool_type_name', __('svr.directory.mark_tool_types.mark_tool_type_name'))->sortable();
		$grid->column('mark_tool_type_selex_code', __('svr.directory.selex_code'))->sortable();
		$grid->column('mark_tool_type_status', __('svr.directory.item_status'))->sortable();
		$grid->column('mark_tool_type_status_delete', __('svr.directory.item_status_delete'))->sortable();

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
        $show = new Show(DirectoryMarkToolTypes::findOrFail($id));
        $show->field('mark_tool_type_id', __('svr.directory.mark_tool_types.mark_tool_type_id'));
        $show->field('mark_tool_type_guid_self', __('svr.directory.guid_self'));
        $show->field('mark_tool_type_value_horriot', __('svr.directory.value_horriot'));
        $show->field('mark_tool_type_name', __('svr.directory.mark_tool_types.mark_tool_type_name'));
        $show->field('mark_tool_type_selex_code', __('svr.directory.selex_code'));
        $show->field('mark_tool_type_status', __('svr.directory.item_status'));
        $show->field('mark_tool_type_status_delete', __('svr.directory.item_status_delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryMarkToolTypes());

		$form->text('mark_tool_type_id', __('svr.directory.mark_tool_types.mark_tool_type_id'))
			->readonly(true)
			->help(__('svr.directory.mark_tool_types.mark_tool_type_id'));
		$form->text('mark_tool_type_guid_self', __('svr.directory.guid_self'))
			->readonly(true)
			->required()
			->help(__('svr.directory.guid_self'));
		$form->text('mark_tool_type_value_horriot', __('svr.directory.value_horriot'))
			->readonly(true)
			->required()
			->help(__('svr.directory.value_horriot'));
		$form->text('mark_tool_type_name', __('svr.directory.mark_tool_types.mark_tool_type_name'))
			->required()
			->help(__('svr.directory.mark_tool_types.mark_tool_type_name'));
		$form->text('mark_tool_type_selex_code', __('svr.directory.selex_code'))
			->help(__('svr.directory.selex_code'));
		$form->select('mark_tool_type_status', __('svr.directory.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->required();
		$form->select('mark_tool_type_status_delete', trans('svr.directory.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
			->readonly(true)->required();

        $form->date('mark_tool_type_created_at', __('svr.directory.created_at'));
        $form->date('update_at', __('svr.directory.update_at'));

        // обработка формы
        $form->saving(function (Form $form)
        {
            // создается текущая страница формы.
            if ($form->isCreating())
            {
                (new DirectoryMarkToolTypes)->markToolTypeCreate(request());
            } else
                // обновляется текущая страница формы.
                if ($form->isEditing())
                {
                    (new DirectoryMarkToolTypes)->markToolTypeUpdate(request());
                }
        });

        return $form;
    }
}
