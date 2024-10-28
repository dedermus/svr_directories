<?php

namespace App\Admin\Controllers\Directory;


use App\Models\Directory\DirectoryAnimalsBreeds;
use App\Models\Directory\DirectoryAnimalsSpecies;
use Illuminate\Support\Facades\Request;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;


class AnimalsBreedsController extends AdminController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr.directory.animals_breeds.title'));
            $content->description(trans('svr.directory.animals_breeds.description'));
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
            $content->header(trans('svr.directory.animals_breeds.title'));
            $content->description(trans('svr.directory.animals_breeds.create'));
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
            ->title(trans('svr.directory.animals_breeds.title'))
            ->description(trans('svr.directory.animals_breeds.edit'))
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
			->title(__('svr.directory.animals_breeds.title'))
			->description(__('svr.directory.animals_breeds.description'))
			->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Animals Breeds';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $grid = new Grid(new DirectoryAnimalsBreeds());
        $grid->column('breed_id', __('svr.directory.animals_breeds.breed_id'))->sortable();
		$grid->column('specie', __('svr.directory.animals_species.specie_name'))->display(function($specie)
		{
			if($specie && is_array($specie))
			{
				return $specie['specie_name'].' [specie_id: '.$specie['specie_id'].']';
			}
		});
		$grid->column('breed_guid_self', __('svr.directory.guid_self'))->sortable();
		$grid->column('breed_guid_horriot', __('svr.directory.guid_horriot'))->sortable();
		$grid->column('breed_uuid_horriot', __('svr.directory.uuid_horriot'))->sortable();
		$grid->column('breed_name', __('svr.directory.animals_breeds.breed_name'))->sortable();
		$grid->column('breed_selex_code', __('svr.directory.selex_code'))->sortable();
		$grid->column('breed_status', __('svr.directory.item_status'))->sortable();
		$grid->column('breed_status_delete', __('svr.directory.item_status_delete'))->sortable();

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
        $show = new Show(DirectoryAnimalsBreeds::findOrFail($id));
        $show->field('breed_id', __('svr.directory.animals_breeds.breed_id'));
		$show->field('specie', __('svr.directory.animals_species.specie_name'))->as(function($specie)
		{
			if($specie)
			{
				return $specie->specie_name.' [specie_id: '.$specie->specie_id.']';
			}
		});
        $show->field('breed_guid_self', __('svr.directory.guid_self'));
        $show->field('breed_guid_horriot', __('svr.directory.guid_horriot'));
        $show->field('breed_uuid_horriot', __('svr.directory.uuid_horriot'));
        $show->field('breed_name', __('svr.directory.animals_breeds.breed_name'));
        $show->field('breed_selex_code', __('svr.directory.selex_code'));
        $show->field('breed_status', __('svr.directory.item_status'));
        $show->field('breed_status_delete', __('svr.directory.item_status_delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DirectoryAnimalsBreeds());

		$form->text('breed_id', __('svr.directory.animals_breeds.breed_id'))
			->readonly(true)
			->help(__('svr.directory.animals_breeds.breed_id'));
		$form->select('specie_id', __('svr.directory.animals_species.specie_id'))
			->readonly(true)
			->options(DirectoryAnimalsSpecies::all()->pluck('specie_name', 'specie_id'))
			->required()
			->help(__('svr.directory.animals_species.specie_id'));
		$form->text('breed_guid_self', __('svr.directory.guid_self'))
			->readonly(true)
			->required()
			->help(__('svr.directory.guid_self'));
		$form->text('breed_guid_horriot', __('svr.directory.guid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr.directory.guid_horriot'));
		$form->text('breed_uuid_horriot', __('svr.directory.uuid_horriot'))
			->readonly(true)
			->required()
			->help(__('svr.directory.uuid_horriot'));
		$form->text('breed_name', __('svr.directory.animals_breeds.breed_name'))
			->required()
			->help(__('svr.directory.animals_breeds.breed_name'));
		$form->text('breed_selex_code', __('svr.directory.selex_code'))
			->help(__('svr.directory.selex_code'));
		$form->select('breed_status', __('svr.directory.item_status'))
			->options(SystemStatusEnum::get_option_list())
			->default('enabled')->required();
		$form->select('breed_status_delete', trans('svr.directory.item_status_delete'))
			->options(SystemStatusDeleteEnum::get_option_list())->default('active')
			->readonly(true)->required();

        $form->date('breed_created_at', __('svr.directory.created_at'));
        $form->date('update_at', __('svr.directory.update_at'));

        // обработка формы
        $form->saving(function (Form $form)
        {
            // создается текущая страница формы.
            if ($form->isCreating())
            {
                (new DirectoryAnimalsBreeds)->animalBreedCreate(request());
            } else
                // обновляется текущая страница формы.
                if ($form->isEditing())
                {
                    (new DirectoryAnimalsBreeds)->animalBreedUpdate(request());
                }
        });

        return $form;
    }

    public function listBreeds()
    {
        $list_district = [];
        $request = Request::instance();
        $region_id = $request->request->get('query');

        if (!empty($region_id))
        {
            $list_district = DirectoryAnimalsBreeds::where('breed_id', $region_id)->get(['breed_id', 'breed_name']);
        }
        return $list_district;
    }
}
