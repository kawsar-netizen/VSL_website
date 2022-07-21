<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

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

//Frontend Route Here By Kawsar Khan......

Route::get('/frontend', [FrontendController::class, 'index'])->name('home_page');

// Login Route Here By Kawsar Khan.......

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    //category route here....

    Route::resource('category','App\Http\Controllers\Admin\CategoryController');

     //slider route here....
     
    Route::resource('slider','App\Http\Controllers\Admin\SliderController');

     //about route here....
     
    Route::resource('about','App\Http\Controllers\Admin\AboutController');

     //clientLogo route here....
     
    Route::resource('clientLogo','App\Http\Controllers\Admin\ClientLogoController');

     //clientOpinion route here....
     
     Route::resource('clientOpinion','App\Http\Controllers\Admin\ClientOpinionController');

});
