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

    //category route here....By Sizar

    Route::resource('category','App\Http\Controllers\Admin\CategoryController');

     //slider route here....By Sizar
     
    Route::resource('slider','App\Http\Controllers\Admin\SliderController');

     //about route here....By Sizar
     
    Route::resource('about','App\Http\Controllers\Admin\AboutController');

     //clientLogo route here....By Sizar
     
    Route::resource('clientLogo','App\Http\Controllers\Admin\ClientLogoController');

     //clientTestimonial route here....By Sizar
     
     Route::resource('clientTestimonial','App\Http\Controllers\Admin\ClientTestimonialController');

     //service route here....By Sizar
     
     Route::resource('service','App\Http\Controllers\Admin\ServiceController');

});
