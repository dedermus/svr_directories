<?php

namespace Svr\Directories;

use Svr\Directories\Controllers\AnimalsBreedsController;
use Svr\Directories\Controllers\AnimalsGendersController;
use Svr\Directories\Controllers\AnimalsSpeciesController;
use OpenAdminCore\Admin\Admin;
use OpenAdminCore\Admin\Auth\Database\Menu;
use OpenAdminCore\Admin\Auth\Database\Permission;
use OpenAdminCore\Admin\Extension;
use Svr\Directories\Controllers\CountryController;
use Svr\Directories\Controllers\DistrictController;
use Svr\Directories\Controllers\MarkStatusesController;
use Svr\Directories\Controllers\MarkToolTypesController;
use Svr\Directories\Controllers\OutBasisesController;
use Svr\Directories\Controllers\OutTypesController;
use Svr\Directories\Controllers\RegionController;
use Svr\Directories\Controllers\ToolsLocationsController;
use Svr\Directories\Seeders\KeepingPurposesSeeder;

class DirectoriesManager extends Extension
{
    /**
     * Bootstrap this package.
     *
     * @return void
     */
    public static function boot()
    {
        static::registerRoutes();

        Admin::extend('svr-directories', __CLASS__);
    }

    /**
     * Register routes for open-admin.
     *
     * @return void
     */
    public static function registerRoutes()
    {
        parent::routes(function ($router) {
            /* @var \Illuminate\Routing\Router $router */
            // страны
            $router->resource('directories/country', CountryController::class);
            // области
            $router->resource('directories/region', RegionController::class);
            // районы
            $router->resource('directories/district', DistrictController::class);
            // виды животных
            $router->resource('directories/animals_species', AnimalsSpeciesController::class);
            // пол животного
            $router->resource('directories/animals_genders', AnimalsGendersController::class);
            // породы животных
            $router->resource('directories/animals_breeds', AnimalsBreedsController::class);
            // цели содержания животных
            $router->resource('directories/keeping_purposes', KeepingPurposesSeeder::class);
            // виды маркирования
            $router->resource('directories/mark_statuses', MarkStatusesController::class);
            // типы маркирования
            $router->resource('directories/mark_tool_types', MarkToolTypesController::class);
            // основания выбытия животного
            $router->resource('directories/out_basises', OutBasisesController::class);
            // расходы животного
            $router->resource('directories/out_types', OutTypesController::class);
            // места нанесения маркировки животного
            $router->resource('directories/tools_locations', ToolsLocationsController::class);
        });
    }

    /**
     * {@inheritdoc}
     */
    public static function import()
    {
        $lastOrder = Menu::max('order');

        $root = [
            'parent_id' => 0,
            'order'     => $lastOrder++,
            'title'     => 'СВР - Справочники',
            'icon'      => 'icon-receipt',
            'uri'       => 'directories',
        ];
        // Если нет пункта в меню, добавляем его
        if (!Menu::where('uri', 'directories')->exists()) {
            $root = Menu::create($root);

            $menus = [
                [
                    'title'     => 'Страны',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/country',
                ],
                [
                    'title'     => 'Области',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/region',
                ],
                [
                    'title'     => 'Районы',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/district',
                ],
                [
                    'title'     => 'Виды животных',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/animals_species',
                ],
                [
                    'title'     => 'Пол животного',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/animals_genders',
                ],
                [
                    'title'     => 'Породы животных',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/animals_breeds',
                ],
                [
                    'title'     => 'Цели содержания животных',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/keeping_purposes',
                ],
                [
                    'title'     => 'Виды маркирования',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/mark_statuses',
                ],
                [
                    'title'     => 'Типы маркирования',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/mark_tool_types',
                ],
                [
                    'title'     => 'Основания выбытия животного',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/out_basises',
                ],
                [
                    'title'     => 'Расходы животного',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/out_types',
                ],
                [
                    'title'     => 'Места нанесения маркировки животного',
                    'icon'      => 'icon-receipt',
                    'uri'       => 'directories/tools_locations',
                ],
            ];

            foreach ($menus as $menu) {
                $menu['parent_id'] = $root->id;
                $menu['order'] = $lastOrder++;

                Menu::create($menu);
            }
        }
        // Установка разрешения на роуты по слагу если его нет
        if (!Permission::where('slug', 'svr.directories')->exists()) {
            parent::createPermission('Exceptions SVR-DIRECTORIES', 'svr.directories', 'svr/directories*');
        }
    }
}
