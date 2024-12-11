<?php

use Illuminate\Support\Facades\Route;
use Svr\Directories\Controllers\Api\ApiDirectoriesController;

/*
|--------------------------------------------------------------------------
| Laravel Roles API CORE Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix(config('svr.api_prefix'))->group(function(){
    Route::get('directories/species', [ApiDirectoriesController::class, 'directoriesSpecies'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/breeds', [ApiDirectoriesController::class, 'directoriesBreeds'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/countries', [ApiDirectoriesController::class, 'directoriesCountries'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/regions', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/districts', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/keeping_purposes', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/keeping_types', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/tools_locations', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/genders', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/out_basises', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/out_types', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/mark_statuses', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/mark_tool_types', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
    Route::get('directories/mark_types', [ApiDirectoriesController::class, 'applicationsStatus'])->middleware(['auth:svr_api', 'api']);
});