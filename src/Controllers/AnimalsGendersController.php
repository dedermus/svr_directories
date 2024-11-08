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
use Svr\Directories\Models\DirectoryGenders;

class AnimalsGendersController extends AdminController
{
    /**
     * Экземпляр класса модели
     *
     * @var DirectoryGenders
     */
    private DirectoryGenders $directoryAnimalsGenders;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->directoryGenders = new DirectoryGenders();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang::directories.animals_genders.title'));
            $content->description(trans('svr-directories-lang::directories.animals_genders.description'));
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
            $content->header(trans('svr-directories-lang::directories.animals_genders.title'));
            $content->description(trans('svr-directories-lang::directories.animals_genders.create'));
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
            ->title(trans('svr-directories-lang::directories.animals_genders.title'))
            ->description(trans('svr-directories-lang::directories.animals_genders.edit'))
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
			->title(__('svr-directories-lang::directories.animals_genders.title'))
			->description(__('svr-directories-lang::directories.animals_genders.description'))
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
        $directoryGenders = $this->directoryGenders;
        $grid = new Grid(new DirectoryGenders());
        $grid->column('gender_id', __('svr-directories-lang::directories.animals_genders.gender_id'))
            ->help(__('gender_id'))
            ->sortable();
		$grid->column('gender_guid_self', __('svr-directories-lang::directories.guid_self'))
            ->help(__('gender_guid_self'))
            ->sortable();
		$grid->column('gender_value_horriot', __('svr-directories-lang::directories.value_horriot'))
            ->help(__('gender_value_horriot'))
            ->sortable();
		$grid->column('gender_name', __('svr-directories-lang::directories.animals_genders.gender_name'))
            ->help(__('gender_name'))
            ->sortable();
		$grid->column('gender_selex_code', __('svr-directories-lang::directories.selex_code'))
            ->help(__('gender_selex_code'))
            ->sortable();
		$grid->column('gender_status', __('svr-directories-lang::directories.item_status'))
            ->help(__('gender_status'))
            ->sortable();
		$grid->column('gender_status_delete', __('svr-directories-lang::directories.item_status_delete'))
            ->help(__('gender_status_delete'))
            ->sortable();
        $grid->column('created_at', trans('svr-directories-lang::directories.created_at'))
            ->help(__('created_at'))
            ->display(function ($value) use ($directoryGenders) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryGenders->getDateFormat()
                );
            })->sortable();
        $grid->column('updated_at', trans('svr-directories-lang::directories.updated_at'))
            ->help(__('updated_at'))
            ->display(function ($value) use ($directoryGenders) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryGenders->getDateFormat()
                );
            })->sortable();
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
        $show->field('gender_id', __('svr-directories-lang::directories.animals_genders.gender_id'));
        $show->field('gender_guid_self', __('svr-directories-lang::directories.guid_self'));
        $show->field('gender_value_horriot', __('svr-directories-lang::directories.guid_horriot'));
        $show->field('gender_name', __('svr-directories-lang::directories.animals_genders.gender_name'));
        $show->field('gender_selex_code', __('svr-directories-lang::directories.selex_code'));
        $show->field('gender_status', __('svr-directories-lang::directories.item_status'));
        $show->field('gender_status_delete', __('svr-directories-lang::directories.item_status_delete'));
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
        $form = new Form(new DirectoryGenders());

		$form->text('gender_id', __('svr-directories-lang::directories.animals_genders.gender_id'))
			->readonly(true)
			->help(__('gender_id'));
		$form->text('gender_guid_self', __('svr-directories-lang::directories.guid_self'))
			->readonly(true)
			->required()
			->help(__('gender_guid_self'));
		$form->text('gender_value_horriot', __('svr-directories-lang::directories.value_horriot'))
			->readonly(true)
			->required()
			->help(__('gender_value_horriot'));
		$form->text('gender_name', __('svr-directories-lang::directories.animals_genders.gender_name'))
			->required()
			->help(__('gender_name'));
		$form->text('gender_selex_code', __('svr-directories-lang::directories.selex_code'))
			->help(__('gender_selex_code'));
		$form->select('gender_status', __('svr-directories-lang::directories.item_status'))
			->options(SystemStatusEnum::get_option_list())
            ->help(__('gender_status'))
			->default('enabled')->required();
		$form->select('gender_status_delete', trans('svr-directories-lang::directories.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
            ->help(__('gender_status_delete'))
			->readonly(true)->required();

        $form->datetime('created_at', __('svr-directories-lang::directories.created_at'))
            ->help(__('created_at'))
            ->disable();
        $form->datetime('updated_at', __('svr-directories-lang::directories.updated_at'))
            ->help(__('updated_at'))
            ->disable();

        // обработка формы
        $form->saving(function (Form $form)
        {
            // создается текущая страница формы.
            if ($form->isCreating())
            {
                (new DirectoryGenders)->animalGenderCreate(request());
            } else
                // обновляется текущая страница формы.
                if ($form->isEditing())
                {
                    (new DirectoryGenders)->animalGenderUpdate(request());
                }
        });

        return $form;
    }
}
