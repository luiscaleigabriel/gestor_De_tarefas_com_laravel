<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\site\{
    SiteController,
    UserController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login.index');
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'controller' => UserController::class
], function () {
    Route::get('ok', 'index');
});
