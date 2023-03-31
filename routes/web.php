<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\UsersController;
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

Route::get('/animais', [AnimaisController::class, 'index']);
Route::get('/animais/{id}', [AnimaisController::class, 'single'])->name('singleAnm');

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{id}', [UsersController::class, 'single'])->name('singleUser');

Route::get('/atividades', [AtividadesController::class, 'index']);
Route::get('/atividades/{id}', [AtividadesController::class, 'single'])->name('singleAtv');



