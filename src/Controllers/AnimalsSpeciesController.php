<?php

namespace Svr\Directories\Controllers;

use App\Models\Directory\DirectoryAnimalsSpecies;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;

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
            $content->header(trans('svr.directory.animals_species.title'));
            $content->description(trans('svr.directory.animals_species.description'));
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
            $content->header(trans('svr.directory.animals_species.title'));
            $content->description(trans('svr.directory.animals_species.create'));
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
            ->title(trans('svr.directory.animals_species.title'))
            ->description(trans('svr.directory.animals_species.edit'))
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
			->title(__('svr.directory.animals_species.title'))
			->description(__('svr.directory.animals_species.description'))
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
        $grid->column('specie_id', __('svr.directory.animals_species.specie_id'))->sortable();
		$grid->column('specie_guid_self', __('svr.directory.guid_self'))->sortable();
		$grid->column('specie_guid_horriot', __('svr.directory.guid_horriot'))->sortable();
		$grid->column('specie_uuid_horriot', __('svr.directory.uuid_horriot'))->sortable();
		$grid->column('specie_name', __('svr.directory.animals_species.specie_name'))->sortable();
		$grid->column('specie_selex_code', __('svr.directory.selex_code'))->sortable();
		$grid->column('specie_status', __('svr.directory.item_status'))->sortable();
		$grid->column('specie_status_delete', __('svr.directory.item_status_delete'))->sortable();

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
        $show = new Show(DirectoryAnimalsSpecies::findOrFail($id));
        $show->field('specie_id', __('svr.directory.animals_species.specie_id'));
        $show->field('specie_guid_self', __('svr.directory.guid_self'));
        $show->field('specie_guid_horriot', __('svr.directory.guid_horriot'));
        $show->field('specie_uuid_horriot', __('svr.directory.uuid_horriot'));
        $show->field('specie_name', __('svr.directory.animals_species.specie_name'));
        $show->field('specie_selex_code', __('svr.directory.selex_code'));
        $show->field('specie_status', __('svr.directory.item_status'));
        $show->field('specie_status_delete', __('svr.directory.item_status_delete'));

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

		$form->text('specie_id', __('svr.directory.animals_species.specie_id'))
			->readonly(true)
			->help(__('svr.directory.animals_species.specie_id'));
		$form->text('specie_guid_self', __('svr.directory.guid_self'))
			->readonly(true)
			->required()
			->help(__('svr.directory.guid_self'));
		$form->text('specie_guid_horriot', __('svr.directory.guid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr.directory.guid_horriot'));
		$form->text('specie_uuid_horriot', __('svr.directory.uuid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr.directory.uuid_horriot'));
		$form->text('specie_name', __('svr.directory.animals_species.specie_name'))
			->required()
			->help(__('svr.directory.animals_species.specie_name'));
		$form->text('specie_selex_code', __('svr.directory.selex_code'))
			->help(__('svr.directory.selex_code'));
		$form->select('specie_status', __('svr.directory.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->required();
		$form->select('specie_status_delete', trans('svr.directory.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
			->readonly(true)->required();

        $form->date('specie_created_at', __('svr.directory.created_at'));
        $form->date('update_at', __('svr.directory.update_at'));

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
