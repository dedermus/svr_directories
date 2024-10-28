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
        // зарегистрировать переводы
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'svr-directories-lang');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        }

        DirectoriesManager::boot();
    }
}
