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
use Svr\Directories\Models\DirectoryAnimalsSpecies;

class AnimalsSpeciesController extends AdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang::directories.animals_species.title'));
            $content->description(trans('svr-directories-lang::directories.animals_species.description'));
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
            $content->header(trans('svr-directories-lang::directories.animals_species.title'));
            $content->description(trans('svr-directories-lang::directories.animals_species.create'));
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
            ->title(trans('svr-directories-lang::directories.animals_species.title'))
            ->description(trans('svr-directories-lang::directories.animals_species.edit'))
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
    public function show($id, Content $content): Content
    {
		return $content
			->title(__('svr-directories-lang::directories.animals_species.title'))
			->description(__('svr-directories-lang::directories.animals_species.description'))
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
        $grid = new Grid(new DirectoryAnimalsSpecies());
        $grid->column('specie_id', __('svr-directories-lang::directories.animals_species.specie_id'))->sortable();
		$grid->column('specie_guid_self', __('svr-directories-lang::directories.guid_self'))->sortable();
		$grid->column('specie_guid_horriot', __('svr-directories-lang::directories.guid_horriot'))->sortable();
		$grid->column('specie_uuid_horriot', __('svr-directories-lang::directories.uuid_horriot'))->sortable();
		$grid->column('specie_name', __('svr-directories-lang::directories.animals_species.specie_name'))->sortable();
		$grid->column('specie_selex_code', __('svr-directories-lang::directories.selex_code'))->sortable();
		$grid->column('specie_status', __('svr-directories-lang::directories.item_status'))->sortable();
		$grid->column('specie_status_delete', __('svr-directories-lang::directories.item_status_delete'))->sortable();

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
    protected function detail($id): Show
    {
        $show = new Show(DirectoryAnimalsSpecies::findOrFail($id));
        $show->field('specie_id', __('svr-directories-lang::directories.animals_species.specie_id'));
        $show->field('specie_guid_self', __('svr-directories-lang::directories.guid_self'));
        $show->field('specie_guid_horriot', __('svr-directories-lang::directories.guid_horriot'));
        $show->field('specie_uuid_horriot', __('svr-directories-lang::directories.uuid_horriot'));
        $show->field('specie_name', __('svr-directories-lang::directories.animals_species.specie_name'));
        $show->field('specie_selex_code', __('svr-directories-lang::directories.selex_code'));
        $show->field('specie_status', __('svr-directories-lang::directories.item_status'));
        $show->field('specie_status_delete', __('svr-directories-lang::directories.item_status_delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryAnimalsSpecies());

		$form->text('specie_id', __('svr-directories-lang::directories.animals_species.specie_id'))
			->readonly(true)
			->help(__('svr-directories-lang::directories.animals_species.specie_id'));
		$form->text('specie_guid_self', __('svr-directories-lang::directories.guid_self'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang::directories.guid_self'));
		$form->text('specie_guid_horriot', __('svr-directories-lang::directories.guid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang::directories.guid_horriot'));
		$form->text('specie_uuid_horriot', __('svr-directories-lang::directories.uuid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr-directories-lang::directories.uuid_horriot'));
		$form->text('specie_name', __('svr-directories-lang::directories.animals_species.specie_name'))
			->required()
			->help(__('svr-directories-lang::directories.animals_species.specie_name'));
		$form->text('specie_selex_code', __('svr-directories-lang::directories.selex_code'))
			->help(__('svr-directories-lang::directories.selex_code'));
		$form->select('specie_status', __('svr-directories-lang::directories.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->required();
		$form->select('specie_status_delete', trans('svr-directories-lang::directories.item_status_delete'))
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
                (new DirectoryAnimalsSpecies)->animalSpecieCreate(request());
            } else
                // обновляется текущая страница формы.
                if ($form->isEditing())
                {
                    (new DirectoryAnimalsSpecies)->animalSpecieUpdate(request());
                }
        });

        return $form;
    }
}
