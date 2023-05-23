<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\HomeController;

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
  return view('login');
});

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/add_data', function () {
  return view('add_data');
})->name('add_data');

Route::get('/tes', [SampahController::class, 'index']);

//Route::get('/simpansampah',[SampahController:class, ''])