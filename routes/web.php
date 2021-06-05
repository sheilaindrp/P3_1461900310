<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\JenisBukuController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('buku', BukuController::class)->except(['edit']);
Route::resource('jenisBuku', JenisBukuController::class)->except(['edit']);
