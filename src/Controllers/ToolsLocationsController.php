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
use Svr\Directories\Models\DirectoryToolsLocations;

class ToolsLocationsController extends AdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang::directories.tools_locations.title'));
            $content->description(trans('svr-directories-lang::directories.tools_locations.description'));
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
            $content->header(trans('svr-directories-lang::directories.tools_locations.title'));
            $content->description(trans('svr-directories-lang::directories.tools_locations.create'));
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
            ->title(trans('svr-directories-lang::directories.tools_locations.title'))
            ->description(trans('svr-directories-lang::directories.tools_locations.edit'))
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
			->title(__('svr-directories-lang::directories.tools_locations.title'))
			->description(__('svr-directories-lang::directories.tools_locations.description'))
			->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Tools Locations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $grid = new Grid(new DirectoryToolsLocations());
        $grid->column('tool_location_id', __('svr-directories-lang::directories.tools_locations.tool_location_id'))->sortable();
		$grid->column('tool_location_guid_self', __('svr-directories-lang::directories.guid_self'))->sortable();
		$grid->column('tool_location_guid_horriot', __('svr-directories-lang::directories.guid_horriot'))->sortable();
		$grid->column('tool_location_uuid_horriot', __('svr-directories-lang::directories.uuid_horriot'))->sortable();
		$grid->column('tool_location_name', __('svr-directories-lang::directories.tools_locations.tool_location_name'))->sortable();
		$grid->column('tool_location_selex_code', __('svr-directories-lang::directories.selex_code'))->sortable();
		$grid->column('tool_location_status', __('svr-directories-lang::directories.item_status'))->sortable();
		$grid->column('tool_location_status_delete', __('svr-directories-lang::directories.item_status_delete'))->sortable();

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
        $show = new Show(DirectoryToolsLocations::findOrFail($id));
        $show->field('tool_location_id', __('svr-directories-lang::directories.tools_locations.tool_location_id'));
        $show->field('tool_location_guid_self', __('svr-directories-lang::directories.guid_self'));
        $show->field('tool_location_guid_horriot', __('svr-directories-lang::directories.guid_horriot'));
        $show->field('tool_location_uuid_horriot', __('svr-directories-lang::directories.uuid_horriot'));
        $show->field('tool_location_name', __('svr-directories-lang::directories.tools_locations.tool_location_name'));
        $show->field('tool_location_selex_code', __('svr-directories-lang::directories.selex_code'));
        $show->field('tool_location_status', __('svr-directories-lang::directories.item_status'));
        $show->field('tool_location_status_delete', __('svr-directories-lang::directories.item_status_delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryToolsLocations());

		$form->text('tool_location_id', __('svr-directories-lang::directories.tools_locations.tool_location_id'))
			->readonly(true)
			->help(__('svr-directories-lang::directories.tools_locations.tool_location_id'));
		$form->text('tool_location_guid_self', __('svr-directories-lang::directories.guid_self'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang::directories.guid_self'));
		$form->text('tool_location_guid_horriot', __('svr-directories-lang::directories.guid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang::directories.guid_horriot'));
		$form->text('tool_location_uuid_horriot', __('svr-directories-lang::directories.uuid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang::directories.uuid_horriot'));
		$form->text('tool_location_name', __('svr-directories-lang::directories.tools_locations.tool_location_name'))
			->required()
			->help(__('svr-directories-lang::directories.animals_breeds.breed_name'));
		$form->text('tool_location_selex_code', __('svr-directories-lang::directories.selex_code'))
			->help(__('svr-directories-lang::directories.selex_code'));
		$form->select('tool_location_status', __('svr-directories-lang::directories.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->required();
		$form->select('tool_location_status_delete', trans('svr-directories-lang::directories.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
			->readonly(true)->required();

        $form->date('created_at', __('svr-directories-lang::directories.created_at'));
        $form->date('updated_at', __('svr-directories-lang::directories.updated_at'));

        // обработка формы
        $form->saving(function (Form $form)
        {
            // создается текущая страница формы.
            if ($form->isCreating())
            {
                (new DirectoryToolsLocations)->toolLocationCreate(request());
            } else
                // обновляется текущая страница формы.
                if ($form->isEditing())
                {
                    (new DirectoryToolsLocations)->toolLocationUpdate(request());
                }
        });

        return $form;
    }
}
