<?php

namespace App\Admin\Controllers\Directory;


use App\Models\Directory\DirectoryGenders;
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


class AnimalsGendersController extends AdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr.directory.animals_genders.title'));
            $content->description(trans('svr.directory.animals_genders.description'));
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
            $content->header(trans('svr.directory.animals_genders.title'));
            $content->description(trans('svr.directory.animals_genders.create'));
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
            ->title(trans('svr.directory.animals_genders.title'))
            ->description(trans('svr.directory.animals_genders.edit'))
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
			->title(__('svr.directory.animals_genders.title'))
			->description(__('svr.directory.animals_genders.description'))
			->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Animals Gender';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $grid = new Grid(new DirectoryGenders());
        $grid->column('gender_id', __('svr.directory.animals_genders.gender_id'))->sortable();
		$grid->column('gender_guid_self', __('svr.directory.guid_self'))->sortable();
		$grid->column('gender_value_horriot', __('svr.directory.value_horriot'))->sortable();
		$grid->column('gender_name', __('svr.directory.animals_genders.gender_name'))->sortable();
		$grid->column('gender_selex_code', __('svr.directory.selex_code'))->sortable();
		$grid->column('gender_status', __('svr.directory.item_status'))->sortable();
		$grid->column('gender_status_delete', __('svr.directory.item_status_delete'))->sortable();

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
        $show = new Show(DirectoryGenders::findOrFail($id));
        $show->field('gender_id', __('svr.directory.animals_genders.gender_id'));
        $show->field('gender_guid_self', __('svr.directory.guid_self'));
        $show->field('gender_value_horriot', __('svr.directory.guid_horriot'));
        $show->field('gender_name', __('svr.directory.animals_genders.gender_name'));
        $show->field('gender_selex_code', __('svr.directory.selex_code'));
        $show->field('gender_status', __('svr.directory.item_status'));
        $show->field('gender_status_delete', __('svr.directory.item_status_delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryGenders());

		$form->text('gender_id', __('svr.directory.animals_genders.gender_id'))
			->readonly(true)
			->help(__('svr.directory.animals_genders.gender_id'));
		$form->text('gender_guid_self', __('svr.directory.guid_self'))
			->readonly(true)
			->required()
			->rules('required|min:3|max:64', ['min' => "Надо больше :min", 'max' => 'надо меньше :max'])
			->help(__('svr.directory.guid_self'));
		$form->text('gender_value_horriot', __('svr.directory.value_horriot'))
			->readonly(true)
			->rules('required|min:3|max:64', ['min' => "Надо больше :min", 'max' => 'надо меньше :max'])
			->help(__('svr.directory.value_horriot'));
		$form->text('gender_name', __('svr.directory.animals_genders.gender_name'))
			->rules('required|min:2|max:100', ['min' => "Надо больше :min", 'max' => 'надо меньше :max'])
			->help(__('svr.directory.animals_genders.gender_name'));
		$form->text('gender_selex_code', __('svr.directory.selex_code'))
			->help(__('svr.directory.selex_code'));
		$form->select('gender_status', __('svr.directory.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->rules('required');
		$form->select('gender_status_delete', trans('svr.directory.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
			->readonly(true)->rules('required');

        $form->date('gender_created_at', __('svr.directory.created_at'));
        $form->date('update_at', __('svr.directory.update_at'));

        return $form;
    }
}
