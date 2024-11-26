<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/demo', function () {
return "My name is Mejbaul Mubin";
});
 */
Route::get('/demo', [DemoController::class, 'DemoAction']);

Route::get('/hello/{name}/{age}', [DemoController::class, 'RouteTwo']);

Route::get('/', function () {
    return view('welcome');
});
