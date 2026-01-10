<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
