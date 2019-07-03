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

//Movies
Route::get('/peliculas', 'MovieController@index');
Route::get('/pelicula/{id}', 'MovieController@show');
Route::get('/peliculas/agregar-pelicula', 'MovieController@create');
Route::post('/peliculas/agregar-pelicula', 'MovieController@store');

//Actors
Route::get('/actores', 'ActorController@index');
Route::get('/actor/{id}', 'ActorController@show');
Route::get('/actores/buscar', 'ActorController@search');
Route::get('/actores/agregar-actor', 'ActorController@create');
Route::post('/actores/agregar-actor', 'ActorController@store');
Route::get('/actores/{id}/editar', 'ActorController@edit');
Route::put('/actores/{id}/editar','ActorController@update');

//Genres
Route::get('/generos', 'GenreController@index');
