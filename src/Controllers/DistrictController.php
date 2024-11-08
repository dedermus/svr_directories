<?php

namespace Svr\Directories\Controllers;

use Illuminate\Support\Carbon;
use Svr\Core\Enums\SystemStatusDeleteEnum;
use Svr\Core\Enums\SystemStatusEnum;
use Illuminate\Support\Facades\Schema;
use OpenAdminCore\Admin\Facades\Admin;
use OpenAdminCore\Admin\Controllers\AdminController;
use OpenAdminCore\Admin\Form;
use OpenAdminCore\Admin\Grid;
use OpenAdminCore\Admin\Show;
use OpenAdminCore\Admin\Layout\Content;
use Svr\Directories\Models\DirectoryCountriesRegion;
use Svr\Directories\Models\DirectoryCountriesRegionsDistrict;
use Svr\Directories\Models\DirectoryCountries;

class DistrictController extends AdminController
{
    /**
     * Экземпляр класса модели
     *
     * @var DirectoryCountriesRegionsDistrict
     */
    private DirectoryCountriesRegionsDistrict $directoryCountriesRegionsDistrict;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->directoryCountriesRegionsDistrict = new DirectoryCountriesRegionsDistrict();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return Admin::content(function (Content $content) {
            $content->header(trans('svr-directories-lang::directories.countries_regions_districts.title'));
            $content->description(trans('svr-directories-lang::directories.countries_regions_districts.description'));
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
            $content->header(trans('svr-directories-lang::directories.countries_regions_districts.title'));
            $content->description(trans('svr-directories-lang::directories.countries_regions_districts.create'));
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
            ->title(trans('svr-directories-lang::directories.countries_regions_districts.title'))
            ->description(trans('svr-directories-lang::directories.countries_regions_districts.edit'))
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
            ->title(__('svr-directories-lang::directories.countries_regions_districts.title'))
            ->description(__('svr-directories-lang::directories.countries_regions_districts.description'))
            ->body($this->detail($id));
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'District';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        $directoryCountriesRegionsDistrict = $this->directoryCountriesRegionsDistrict;
        $grid = new Grid(new DirectoryCountriesRegionsDistrict());
        $grid->column('district_id', __('svr-directories-lang::directories.countries_regions_districts.district_id'))
            ->help(__('district_id'))
            ->sortable();
        $grid->column('country_ngos', __('svr-directories-lang::directories.countries_regions_districts.country_ngos'))
            ->display(function ($country_ngos) {
                $data = DirectoryCountries::pluck('country_name', 'country_id');
                return ($data->get($country_ngos, '') !== '') ? "($country_ngos) $data[$country_ngos]" : 'not found';
            })
            ->help(__('country_ngos'))
            ->sortable();
        $grid->column('region_id', __('svr-directories-lang::directories.countries_regions_districts.region_id'))
            ->display(function ($region_id) {
                $data = DirectoryCountriesRegion::pluck('region_name', 'region_id');
                return ($data->get($region_id, '') !== '') ? "($region_id) $data[$region_id]" : 'not found';
            })
            ->help(__('region_id'))
            ->sortable();

        $grid->column('district_rn', __('svr-directories-lang::directories.countries_regions_districts.district_rn'))
            ->help(__('district_rn'))
            ->sortable();
        $grid->column(
            'district_name', __('svr-directories-lang::directories.countries_regions_districts.district_name')
        )
            ->help(__('district_name'))
            ->sortable();
        $grid->column(
            'district_status', __('svr-directories-lang::directories.countries_regions_districts.district_status')
        )
            ->help(__('district_status'))
            ->sortable();
        $grid->column(
            'district_status_delete',
            __('svr-directories-lang::directories.countries_regions_districts.district_status_delete')
        )
            ->help(__('district_status_delete'))
            ->sortable();
        $grid->column('created_at', trans('svr-directories-lang::directories.created_at'))
            ->help(__('created_at'))
            ->display(function ($value) use ($directoryCountriesRegionsDistrict) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryCountriesRegionsDistrict->getDateFormat()
                );
            })->sortable();
        $grid->column('updated_at', trans('svr-directories-lang::directories.updated_at'))
            ->help(__('updated_at'))
            ->display(function ($value) use ($directoryCountriesRegionsDistrict) {
                return Carbon::parse($value)->timezone(config('app.timezone'))->format(
                    $directoryCountriesRegionsDistrict->getDateFormat()
                );
            })->sortable();
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
        $show = new Show(DirectoryCountriesRegionsDistrict::findOrFail($id));
        $show->field('district_id', __('svr-directories-lang::directories.countries_regions_districts.district_id'));
        $show->field('country_ngos', __('svr-directories-lang::directories.countries_regions_districts.country_ngos'))
            ->as(function ($country_ngos) {
                $data = DirectoryCountries::pluck('country_name', 'country_id');
                return ($data->has($country_ngos)) ? "($country_ngos) " . $data[$country_ngos] : 'not found';
            });
        $show->field('region_id', __('svr-directories-lang::directories.countries_regions_districts.region_id'))
            ->as(function ($region_id) {
                $data = DirectoryCountriesRegion::pluck('region_name', 'region_id');
                return ($data->has($region_id)) ? "($region_id) " . $data[$region_id] : 'not found';
            });
        $show->field('district_rn', __('svr-directories-lang::directories.countries_regions_districts.district_rn'));
        $show->field(
            'district_name', __('svr-directories-lang::directories.countries_regions_districts.district_name')
        );
        $show->field(
            'district_status', __('svr-directories-lang::directories.countries_regions_districts.district_status')
        );
        $show->field(
            'district_status_delete',
            __('svr-directories-lang::directories.countries_regions_districts.district_status_delete')
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
        $form = new Form(new DirectoryCountriesRegionsDistrict());

        $form->text('district_id', __('svr-directories-lang::directories.countries_regions_districts.district_id'))
            ->readonly(true)
            ->help(__('district_id'));

        $form->select('country_ngos', __('svr-directories-lang::directories.countries_regions_districts.country_ngos'))
            ->options(function ($id) {
                return DirectoryCountries::pluck('country_name', 'country_ngos')
                    ->mapWithKeys(function ($value, $key) {
                        return [$key => "($key) $value"];
                    })
                    ->all();
            })
            ->required()
            ->readonly(true)
            ->help(__('country_ngos'));

        $form->select('region_id', __('svr-directories-lang::directories.countries_regions_districts.region_id'))
            ->options(function () {
                return DirectoryCountriesRegion::pluck('region_name', 'region_id')
                    ->mapWithKeys(function ($value, $key) {
                        return [$key => "($key) $value"];
                    })
                    ->all();
            })
            ->help(__('region_id'))
            ->required();

        $form->text('district_rn', __('svr-directories-lang::directories.countries_regions_districts.district_rn'))
            ->readonly(true)
            ->required()
            ->help(__('district_rn'));

        $form->text('district_name', __('svr-directories-lang::directories.countries_regions_districts.district_name'))
            ->required()
            ->help(__('district_name'));
        $form->select(
            'district_status', __('svr-directories-lang::directories.countries_regions_districts.district_status')
        )
            ->options(SystemStatusEnum::get_option_list())
            ->help(__('district_status'))
            ->default('enabled')
            ->required();
        $form->select(
            'district_status_delete',
            trans('svr-directories-lang::directories.countries_regions_districts.district_status_delete')
        )
            ->options(SystemStatusDeleteEnum::get_option_list())->default('active')
            ->help(__('district_status_delete'))
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
                (new DirectoryCountriesRegionsDistrict)->countriesRegionsDistrictCreate(request());
            }
            // обновляется текущая страница формы.
            if ($form->isEditing()) {
                (new DirectoryCountriesRegionsDistrict)->countriesRegionsDistrictUpdate(request());
            }
        });

        return $form;
    }
}
