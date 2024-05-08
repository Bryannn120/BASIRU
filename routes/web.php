<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::View('/example-page', 'example-page');
Route::View('/example-auth', 'example-auth');
Route::GET('controller/informatika', [\App\Http\Controllers\InformatikaController::class, "hello"]);
Route::GET('controller/input', [\App\Http\Controllers\InputController::class, "hello"]);