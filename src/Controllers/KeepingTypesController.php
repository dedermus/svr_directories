<?php

namespace App\Admin\Controllers\Directory;

use App\Models\Directory\DirectoryKeepingTypes;
use App\SystemStatusDeleteEnum;
use App\SystemStatusEnum;
use Illuminate\Support\Facades\Log;
use OpenAdminCore\Admin\Auth\Permission;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use Illuminate\Support\Facades\DB;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;


class KeepingTypesController extends AdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr.directory.keeping_types.title'));
            $content->description(trans('svr.directory.keeping_types.description'));
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
            $content->header(trans('svr.directory.keeping_types.title'));
            $content->description(trans('svr.directory.keeping_types.create'));
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
            ->title(trans('svr.directory.keeping_types.title'))
            ->description(trans('svr.directory.keeping_types.edit'))
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
			->title(__('svr.directory.keeping_types.title'))
			->description(__('svr.directory.keeping_types.description'))
			->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Keeping Types';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $grid = new Grid(new DirectoryKeepingTypes());
        $grid->column('keeping_type_id', __('svr.directory.keeping_types.keeping_type_id'))->sortable();
		$grid->column('keeping_type_guid_self', __('svr.directory.guid_self'))->sortable();
		$grid->column('keeping_type_guid_horriot', __('svr.directory.guid_horriot'))->sortable();
		$grid->column('keeping_type_uuid_horriot', __('svr.directory.uuid_horriot'))->sortable();
		$grid->column('keeping_type_name', __('svr.directory.keeping_types.keeping_type_name'))->sortable();
		$grid->column('keeping_type_selex_code', __('svr.directory.selex_code'))->sortable();
		$grid->column('keeping_type_status', __('svr.directory.item_status'))->sortable();
		$grid->column('keeping_type_status_delete', __('svr.directory.item_status_delete'))->sortable();

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
        $show = new Show(DirectoryKeepingTypes::findOrFail($id));
        $show->field('keeping_type_id', __('svr.directory.keeping_types.keeping_type_id'));
        $show->field('keeping_type_guid_self', __('svr.directory.guid_self'));
        $show->field('keeping_type_guid_horriot', __('svr.directory.guid_horriot'));
        $show->field('keeping_type_uuid_horriot', __('svr.directory.uuid_horriot'));
        $show->field('keeping_type_name', __('svr.directory.keeping_types.keeping_type_name'));
        $show->field('keeping_type_selex_code', __('svr.directory.selex_code'));
        $show->field('keeping_type_status', __('svr.directory.item_status'));
        $show->field('keeping_type_status_delete', __('svr.directory.item_status_delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryKeepingTypes());

		$form->text('keeping_type_id', __('svr.directory.keeping_types.keeping_type_id'))
			->readonly(true)
			->help(__('svr.directory.keeping_types.keeping_type_id'));
		$form->text('keeping_type_guid_self', __('svr.directory.guid_self'))
			->readonly(true)
			->required()
			->rules('required|min:3|max:64', ['min' => "Надо больше :min", 'max' => 'надо меньше :max'])
			->help(__('svr.directory.guid_self'));
		$form->text('keeping_type_guid_horriot', __('svr.directory.guid_horriot'))
			->readonly(true)
			->rules('required|min:3|max:64', ['min' => "Надо больше :min", 'max' => 'надо меньше :max'])
			->help(__('svr.directory.guid_horriot'));
		$form->text('keeping_type_uuid_horriot', __('svr.directory.uuid_horriot'))
			->readonly(true)
			->rules('required|min:3|max:64', ['min' => "Надо больше :min", 'max' => 'надо меньше :max'])
			->help(__('svr.directory.uuid_horriot'));
		$form->text('keeping_type_name', __('svr.directory.keeping_types.keeping_type_name'))
			->rules('required|min:2|max:100', ['min' => "Надо больше :min", 'max' => 'надо меньше :max'])
			->help(__('svr.directory.keeping_types.keeping_type_name'));
		$form->text('keeping_type_selex_code', __('svr.directory.selex_code'))
			->help(__('svr.directory.selex_code'));
		$form->select('specie_status', __('svr.directory.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->rules('required');
		$form->select('keeping_type_status_delete', trans('svr.directory.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
			->readonly(true)->rules('required');

        $form->date('keeping_type_created_at', __('svr.directory.created_at'));
        $form->date('update_at', __('svr.directory.update_at'));

        return $form;
    }
}
