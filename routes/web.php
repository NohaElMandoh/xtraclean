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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contactUs', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::post('/contact_us_submit', [App\Http\Controllers\HomeController::class, 'contact_us_submit'])->name('contact_us_submit');



// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
