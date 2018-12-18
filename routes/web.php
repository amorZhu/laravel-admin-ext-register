<?php

use Encore\Register\Http\Controllers\RegisterController;

Route::get('register', RegisterController::class.'@index');
Route::post('register', RegisterController::class.'@index');
