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

Route::get('/', 'FrontController@index');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/reviews', 'FrontController@reviews');
Route::get('/admin', 'FrontController@admin');

Route::get('/controlador', 'PruebaController@index');
Route::get('/name/{nombre}', 'PruebaController@nombre');
Route::resource('movie', 'MovieController');

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/prueba', function () {
    return "esto es una prueba";
});


Route::get('/otraprueba', function () {
    return "Otra prueba de una dos tres cuatro cinco";
});


Route::get('/nombre/{nombre}', function ($nombre) {
    return "Este el nombre".$nombre;
});

Route::get('/cosa/{nombre}', function ($nombre) {
    return "Este es la cosa"." = ".$nombre;
});




