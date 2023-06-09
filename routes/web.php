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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/',action:'App\Http\Controllers\HomeController@index')->name('home');

Route::get('contact',function(){
    return view('contact');
})->name('contact');

Route::get('about', function(){
    return view('about');
})->name('about');

Auth::routes([
    'register' => false
]);

Route::group(['middleware'=>'auth'], function(){
    Route::resource('companies','App\Http\Controllers\CompanyController');
    Route::resource('employees','App\Http\Controllers\EmployeeController');
});
