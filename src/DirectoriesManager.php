<?php

namespace Svr\Directories;

use App\Admin\Controllers\Directory\AnimalsBreedsController;
use Svr\Directories\Controllers\LogsHerriotController;
use Svr\Directories\Controllers\LogsUsersController;
use OpenAdminCore\Admin\Admin;
use OpenAdminCore\Admin\Auth\Database\Menu;
use OpenAdminCore\Admin\Auth\Database\Permission;
use OpenAdminCore\Admin\Extension;

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

            $router->resource('directories/animals_breeds', AnimalsBreedsController::class);






            $router->resource('svr/logs_herriot', LogsHerriotController::class);
            $router->resource('svr/logs_users', LogsUsersController::class);
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
            'icon'      => 'icon-copy',
            'uri'       => 'directories',
        ];
        // Если нет пункта в меню, добавляем его
        if (!Menu::where('uri', 'directories')->exists()) {
            $root = Menu::create($root);

            $menus = [
                [
                    'title'     => 'Логи действий пользователей',
                    'icon'      => 'icon-book-dead',
                    'uri'       => 'svr/logs_herriot',
                ],
                [
                    'title'     => 'Логи отправки в Хоррит',
                    'icon'      => 'icon-cloud',
                    'uri'       => 'svr/logs_users',
                ]
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
