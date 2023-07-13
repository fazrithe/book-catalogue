<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalogue', [App\Http\Controllers\CatalogueController::class, 'index'])->name('catalogue');
Route::get('/catalogue/create', [App\Http\Controllers\CatalogueController::class, 'create'])->name('catalogue.create');
Route::post('/catalogue/save', [App\Http\Controllers\CatalogueController::class, 'store'])->name('catalogue.save');
Route::get('/catalogue/edit/{id}', [App\Http\Controllers\CatalogueController::class, 'edit'])->name('catalogue.edit');
