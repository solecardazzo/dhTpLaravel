<?php

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
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/preguntasFrecuentes', function () {
    return view('preguntasFrecuentes');
});

Route::get('/agradecimientos', function () {
    return view('agradecimientos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/eventos', function () {
    return view('eventos');
});
Route::get('/quienesSomos', function () {
    return view('quienesSomos');
});

Route::get('/product','ProductController@index');
Route::get('/show/{id}', 'ProductController@show')->name('front.product.show');

Route::get('/profile', "UserController@show")->name("profile")->middleware('auth');

Auth::routes();


Route::get('/edit/{id}', 'UserUpdateController@edit')->middleware('auth')->name('edit');
Route::get('/update/{id}', 'UserUpdateController@update')->name('update');
