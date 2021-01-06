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


Route::get('/invoice_index', [App\Http\Controllers\ReportsController::class, 'invoice_index'])->name('location_index');
Route::get('/location_index', [App\Http\Controllers\ReportsController::class, 'location_index'])->name('location_index');

Route::get('/', [App\Http\Controllers\ReportsController::class, 'index'])->name('index');

