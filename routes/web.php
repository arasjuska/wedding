<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {

    // Authenticated users
    Route::view('/', 'dashboard');

    // Admin routes
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function (){
        Route::resource('/roles', RoleController::class);
    });
});

require __DIR__.'/auth.php';
