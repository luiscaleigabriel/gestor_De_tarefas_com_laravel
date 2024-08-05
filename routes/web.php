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
    Route::post('/login', 'logar')->name('login.logar');
    Route::get('/logout', 'logout')->name('login.logout');
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.'
], function () {
    Route::get('tasks', [Tasks,'index'])->name('tasks')->middleware('auth');
});
