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


Auth::routes();

Route::get('/', [App\Http\Controllers\ApplicationController::class, 'index'])->name('index');

Route::post('/newapp', [App\Http\Controllers\ApplicationController::class, 'zakazs'])->name('newapplications');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/application', [App\Http\Controllers\ApplicationController::class, 'index'])->name('application');
Route::get('/prices', function () {
    return view('prices');
});
Route::get('/requ', [App\Http\Controllers\ApplicationController::class, 'indexrequ'])->name('indexrequ');
