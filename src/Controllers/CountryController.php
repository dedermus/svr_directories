<?php

namespace Svr\Directories\Controllers;

use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Directories\Models\DirectoryCountries;

class CountryController extends AdminController
{
    /**
     * Экземпляр класса модели
     *
     * @var DirectoryCountries
     */
    private DirectoryCountries $directoryCountries;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->directoryCountries = new DirectoryCountries();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang::directories.countries.title'));
            $content->description(trans('svr-directories-lang::directories.countries.description'));
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
            $content->header(trans('svr-directories-lang::directories.countries.title'));
            $content->description(trans('svr-directories-lang::directories.countries.create'));
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
            ->title(trans('svr-directories-lang::directories.countries.title'))
            ->description(trans('svr-directories-lang::directories.countries.edit'))
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
            ->title(__('svr-directories-lang::directories.countries.title'))
            ->description(__('svr-directories-lang::directories.countries.description'))
            ->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Country';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $directoryCountries = $this->directoryCountries;
        $grid = new Grid(new DirectoryCountries());
        $grid->column('country_id', __('svr-directories-lang::directories.countries.country_id'))
            ->help(__('country_id'))
            ->sortable();
        $grid->column('country_id', __('svr-directories-lang::directories.countries.country_id'))
            ->help(__('country_id'))
            ->sortable();
        $grid->column('country_guid_self', __('svr-directories-lang::directories.countries.country_guid_self'))
            ->help(__('country_guid_self'))
            ->sortable();
        $grid->column('country_guid_horriot', __('svr-directories-lang::directories.countries.country_guid_horriot'))
            ->help(__('country_guid_horriot'))
            ->sortable();
        $grid->column('country_uuid_horriot', __('svr-directories-lang::directories.countries.country_uuid_horriot'))
            ->help(__('country_uuid_horriot'))
            ->sortable();
        $grid->column('country_ngos', __('svr-directories-lang::directories.countries.country_ngos'))
            ->help(__('country_ngos'))
            ->sortable();
        $grid->column('country_gos', __('svr-directories-lang::directories.countries.country_gos'))
            ->help(__('country_gos'))
            ->sortable();
        $grid->column('country_name', __('svr-directories-lang::directories.countries.country_name'))
            ->help(__('country_name'))
            ->sortable();
        $grid->column('country_kod', __('svr-directories-lang::directories.countries.country_kod'))
            ->help(__('country_kod'))
            ->sortable();
        $grid->column('country_kod3', __('svr-directories-lang::directories.countries.country_kod3'))
            ->help(__('country_kod3'))
            ->sortable();
        $grid->column('country_kod3_cifra', __('svr-directories-lang::directories.countries.country_kod3_cifra'))
            ->help(__('country_kod3_cifra'))
            ->sortable();
        $grid->column('country_status', __('svr-directories-lang::directories.countries.country_status'))
            ->help(__('country_status'))
            ->sortable();
        $grid->column('country_status_delete', __('svr-directories-lang::directories.countries.country_status_delete'))
            ->help(__('country_status_delete'))
            ->sortable();
        $grid->column('created_at', trans('svr-directories-lang::directories.created_at'))
            ->help(__('created_at'))
            ->display(function ($value) use ($directoryCountries) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryCountries->getDateFormat()
                );
            })->sortable();
        $grid->column('updated_at', trans('svr-directories-lang::directories.updated_at'))
            ->help(__('updated_at'))
            ->display(function ($value) use ($directoryCountries) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryCountries->getDateFormat()
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
        $show = new Show(DirectoryCountries::findOrFail($id));
        $show->field('country_id', __('svr-directories-lang::directories.countries.country_id'));
        $show->field('country_guid_self', __('svr-directories-lang::directories.countries.country_guid_self'));
        $show->field('country_guid_horriot', __('svr-directories-lang::directories.countries.country_guid_horriot'));
        $show->field('country_uuid_horriot', __('svr-directories-lang::directories.countries.country_uuid_horriot'));
        $show->field('country_ngos', __('svr-directories-lang::directories.countries.country_ngos'));
        $show->field('country_gos', __('svr-directories-lang::directories.countries.country_gos'));
        $show->field('country_name', __('svr-directories-lang::directories.countries.country_name'));
        $show->field('country_kod', __('svr-directories-lang::directories.countries.country_kod'));
        $show->field('country_kod3', __('svr-directories-lang::directories.countries.country_kod3'));
        $show->field('country_kod3_cifra', __('svr-directories-lang::directories.countries.country_kod3_cifra'));
        $show->field('country_name_eng', __('svr-directories-lang::directories.countries.country_name_eng'));
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
        $form = new Form(new DirectoryCountries());

        $form->text('country_id', __('svr-directories-lang::directories.countries.country_id'))
            ->readonly(true)
            ->help(__('country_id'));
        $form->text('country_guid_self', __('svr-directories-lang::directories.countries.country_guid_self'))
            ->help(__('country_guid_self'));
        $form->text('country_guid_horriot', __('svr-directories-lang::directories.countries.country_guid_horriot'))
            ->help(__('country_guid_horriot'));
        $form->text('country_uuid_horriot', __('svr-directories-lang::directories.countries.country_uuid_horriot'))
            ->help(__('country_uuid_horriot'));
        $form->text('country_ngos', __('svr-directories-lang::directories.countries.country_ngos'))
            ->help(__('country_ngos'));
        $form->text('country_gos', __('svr-directories-lang::directories.countries.country_gos'))
            ->help(__('country_gos'));
        $form->text('country_name', __('svr-directories-lang::directories.countries.country_name'))
            ->help(__('country_name'));
        $form->text('country_kod', __('svr-directories-lang::directories.countries.country_kod'))
            ->help(__('country_kod'));
        $form->text('country_kod3', __('svr-directories-lang::directories.countries.country_kod3'))
            ->help(__('country_kod3'));
        $form->text('country_kod3_cifra', __('svr-directories-lang::directories.countries.country_kod3_cifra'))
            ->help(__('country_kod3_cifra'));
        $form->text('country_name_eng', __('svr-directories-lang::directories.countries.country_name_eng'))
            ->help(__('country_name_eng'));
        $form->select(
            'country_status', __('svr-directories-lang::directories.countries.country_status')
        )
            ->options(SystemStatusEnum::get_option_list())
            ->help(__('country_status'))
            ->default('enabled')
            ->required();
        $form->select(
            'country_status_delete',
            trans('svr-directories-lang::directories.countries.country_status_delete')
        )
            ->options(SystemStatusDeleteEnum::get_option_list())->default('active')
            ->help(__('country_status_delete'))
            ->required();



        $form->datetime('created_at', __('svr-directories-lang::directories.created_at'))
            ->help(__('created_at'))
            ->disable();
        $form->datetime('updated_at', __('svr-directories-lang::directories.updated_at'))
            ->help(__('updated_at'))
            ->disable();

        // обработка формы
        $form->saving(function (Form $form) {
            // создается текущая страница формы.
            if ($form->isCreating()) {
                (new DirectoryCountries)->countryCreate(request());
            }
            // обновляется текущая страница формы.
            if ($form->isEditing()) {
                (new DirectoryCountries)->countryUpdate(request());
            }
        });

        return $form;
    }
}

