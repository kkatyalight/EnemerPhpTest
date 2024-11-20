<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Auth::routes();

Route::get('/', [MainController::class, 'index']);

// Route::get('/', function(){return view('main');});

Route::post('/', [MainController::class, 'store']);
