<?php

use App\Http\Controllers\MainController;
use App\Services\MainOperations;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-hash', [MainController::class, 'showHash']);
