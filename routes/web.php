<?php

use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'controller' => UserController::class
], function () {
    Route::get('ok', 'index');
});
