<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ContactFormController;

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
    return view('home', ['page'=>'home']);
});
Route::get('/about', function () {
    return view('about', ['page'=>'about']);
});
Route::get('/contact', function () {
    return view('contact', ['page'=>'contact']);
});
// Route::get('/service/{id}', function ($id) {
//     return view('service', ['page'=>'service','id'=>$id]);
// });
Route::resource('/service', ServiceController::class);
Route::resource('/solution', SolutionController::class);
Route::get('/maintenance', function () {
    return view('maintenance', ['page'=>'maintenance']);
});

Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');