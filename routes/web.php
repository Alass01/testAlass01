<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ArticleController::class ,'index'])->name('index');
// Route::get('/',[ArticleController::class ,'create'])->name('create');
// Route::post('/',[ArticleController::class ,'store'])->name('store');
// Route::get('/',[ArticleController::class ,'edit'])->name('edit');
