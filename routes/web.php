<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/layout', [SiteController::class, 'layout'])->name('layout');

Route::group(['prefix' => '/'], function () {
    Route::get('/', [SiteController::class, 'index']);
});
