<?php

namespace Svr\Directories\Controllers;

use Svr\Core\Enums\SystemStatusEnum;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Directories\Models\DirectoryCountriesRegion;
use Svr\Directories\Models\DirectoryCountries;

class RegionController extends AdminController
{
    /**
     * Экземпляр класса модели
     *
     * @var DirectoryCountriesRegion
     */
    private DirectoryCountriesRegion $directoryCountriesRegion;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->directoryCountriesRegion = new DirectoryCountriesRegion();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang::directories.countries_regions.title'));
            $content->description(trans('svr-directories-lang::directories.countries_regions.description'));
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
            $content->header(trans('svr-directories-lang::directories.countries_regions.title'));
            $content->description(trans('svr-directories-lang::directories.countries_regions.create'));
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
            ->title(trans('svr-directories-lang::directories.countries_regions.title'))
            ->description(trans('svr-directories-lang::directories.countries_regions.edit'))
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
            ->title(__('svr-directories-lang::directories.countries_regions.title'))
            ->description(__('svr-directories-lang::directories.countries_regions.description'))
            ->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Region';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $directoryCountriesRegion = $this->directoryCountriesRegion;
        $grid = new Grid(new DirectoryCountriesRegion);
        $grid->column('region_id', __('svr-directories-lang::directories.countries_regions.region_id'))
            ->help(__('region_id'))
            ->sortable();
        $grid->column('country_id', __('svr-directories-lang::directories.countries_regions.country_id'))
            ->display(function ($country_id) {
                $data = DirectoryCountries::pluck('country_name', 'country_id');
                return ($data->get($country_id, '') !== '') ? "($country_id) $data[$country_id]" : 'not found';
            })
            ->help(__('country_id'))
            ->sortable();

        $grid->column('region_obl', __('svr-directories-lang::directories.countries_regions.region_obl'))
            ->help(__('region_obl'))
            ->sortable();
        $grid->column(
            'region_name', __('svr-directories-lang::directories.countries_regions.region_name')
        )
            ->help(__('region_name'))
            ->sortable();
        $grid->column(
            'region_status', __('svr-directories-lang::directories.countries_regions.region_status')
        )
            ->help(__('region_status'))
            ->sortable();
        $grid->column(
            'region_status_delete',
            __('svr-directories-lang::directories.countries_regions.region_status_delete')
        )
            ->help(__('region_status_delete'))
            ->sortable();
        $grid->column('created_at', trans('svr-directories-lang::directories.created_at'))
            ->help(__('created_at'))
            ->display(function ($value) use ($directoryCountriesRegion) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryCountriesRegion->getDateFormat()
                );
            })->sortable();
        $grid->column('updated_at', trans('svr-directories-lang::directories.updated_at'))
            ->help(__('updated_at'))
            ->display(function ($value) use ($directoryCountriesRegion) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryCountriesRegion->getDateFormat()
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
        $show = new Show(DirectoryCountriesRegion::findOrFail($id));
        $show->field('region_id', __('svr-directories-lang::directories.countries_regions.region_id'));
        $show->field('country_id', __('svr-directories-lang::directories.countries_regions.country_id'))
            ->as(function ($country_id) {
                $data = DirectoryCountries::pluck('country_name', 'country_id');
                return ($data->has($country_id)) ? "($country_id) " . $data[$country_id] : 'not found';
            });
        $show->field('region_obl', __('svr-directories-lang::directories.countries_regions.region_obl'));
        $show->field(
            'region_name', __('svr-directories-lang::directories.countries_regions.region_name')
        );
        $show->field(
            'region_status', __('svr-directories-lang::directories.countries_regions.region_status')
        );
        $show->field(
            'region_status_delete',
            __('svr-directories-lang::directories.countries_regions.region_status_delete')
        );
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
        $form = new Form(new DirectoryCountriesRegion());

        $form->text('region_id', __('svr-directories-lang::directories.countries_regions.region_id'))
            ->readonly(true)
            ->help(__('region_id'));

        $form->select('country_id', __('svr-directories-lang::directories.countries_regions.country_id'))
            ->options(function ($id) {
                return DirectoryCountries::pluck('country_name', 'country_id')
                    ->mapWithKeys(function ($value, $key) {
                        return [$key => "($key) $value"];
                    })
                    ->all();
            })
            ->required()

            ->help(__('country_ngos'));

        $form->text('region_obl', __('svr-directories-lang::directories.countries_regions.region_obl'))
            ->readonly(true)
            ->required()
            ->help(__('region_obl'));

        $form->text('region_name', __('svr-directories-lang::directories.countries_regions.region_name'))
            ->required()
            ->help(__('region_name'));
        $form->select(
            'region_status', __('svr-directories-lang::directories.countries_regions.region_status')
        )
            ->options(SystemStatusEnum::get_option_list())
            ->help(__('region_status'))
            ->default('enabled')
            ->required();
        $form->select(
            'region_status_delete',
            trans('svr-directories-lang::directories.countries_regions.region_status_delete')
        )
            ->options(SystemStatusDeleteEnum::get_option_list())->default('active')
            ->help(__('region_status_delete'))
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
                (new DirectoryCountriesRegion)->countriesRegionCreate(request());
            }
            // обновляется текущая страница формы.
            if ($form->isEditing()) {
                (new DirectoryCountriesRegion)->countriesRegionUpdate(request());
            }
        });

        return $form;
    }
}
