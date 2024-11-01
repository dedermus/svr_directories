SVR DIRECTORIES для Open-Admin ver:1.0.46
=========================


## Установка

```
$ composer require svr/directories

$ php artisan migrate --path=vendor/svr/directories/database/migrations

```
## Добавление пунктов меню.
```
$ php artisan admin:import svr-directories

```

## Permission.
Если пермиссий на роуты в БД нет (проверка по слагу), создаются через команду
```
$ php artisan migrate --path=vendor/svr/directories/database/migrations
```
## Seeders.

Пример

Обратить внимание!  Использование двойного слеша: `\\` - для Linux/UNIX систем. Для OS использовать одинарный
```
$ php artisan db:seed --class=Svr\Directories\Seeders\DirectoriesSeeder
