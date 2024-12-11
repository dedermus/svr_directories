<?php

namespace Svr\Directories;

use Illuminate\Support\ServiceProvider;

class DirectoriesServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // Регистрируем routs
        $this->loadRoutesFrom(__DIR__ . '/../routes/Api/api.php');
        $this->register();

        // зарегистрировать переводы
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'svr-directories-lang');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadMigrationsFrom(__DIR__.'/../database/seeders');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }

        DirectoriesManager::boot();
    }
}
