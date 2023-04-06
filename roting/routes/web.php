<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
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

//regular expression
// Route::get('/parameter/{nama}', function($nama = 'Parameter Firmansyah'){
//     return $nama;
// })->where('nama','[A-Ca-c]+');

//parameter operasional
// Route::get('/parameter/{nama}', function($nama = 'Parameter Firmansyah'){
//     return $nama;
// });

//router parameter
// Route::get('/parameter/{nama}', function($nama){
//     return "Wellcome " .$nama;
// });


//router default
// Route::get('/Awal', [NewController::class,"index"]);

//redirect route
// route::redirect('/pengguna','/Awal');

//route view
// route::view('/Awwalan','tampilan');

//global Constain
// Route::get('user/{id}', function($id){
// return $id;
// });

//forward slasher
// Route::get('user/{search}', function($search){
//     return $search;
// })->where('search', '.*');


//Route Bersama
// Route::get('/routename', function(){
//     return redirect()->route('routeName', ["search" => "Yusuf Firmansyah", "id" => "E41210798"]);
// });    

// //middleware
// Route::middleware(['auth'])->group(function(){
//     Route::get('/transaksi', function(){
//         return "Ini page Transaksi";
//     });
// });

// //namespace
// Route::namespace('Admin')->group(function(){
//     Route::get('/profile',function(){
//         return "Ini web profile";
//     });
// });

// //Subdomain
// Route::domain('localhost')->group(function(){
//     Route::match(['post','get'],'/user/{search?}' 
//     [user\user::class, 'index'])->where('search','.*')
//     ->name("routeName");
// });

//Route Name
Route::prefix('admin')->group(function(){
    Route::get('/user/{search?}',function($search="Route dengan nama"){
        return $search;
    })->where('search', '.*')->name("routeName");
    Route::get('/gagal', function(){
        return "maaf kamu gagal";
    })->name("gagal");
});
