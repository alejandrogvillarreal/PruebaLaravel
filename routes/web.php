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


Route::get('/rutaConController', 'PruebaController@home');

Route::get('/miRuta', function () {
    return "<h1>Mi primer ruta en Laravel</h1>";
});

Route::get('/peliculas', function () {

  $peliculas = [
              ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
              ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
              ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
              ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
              ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
              ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
              ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
              ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
              ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
              ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama']
            ];


  echo '<h1>Listado de Pelis </h1>';
    echo  '<ul>';
  foreach ($peliculas as $key => $value) {
    echo  '<li>' . $value['title'] . " - " . $value['genre'] . '</li>';
  }
  echo  '</ul>';

});

Route::get('/pelicula/{titulo}', function ($titulo = null) {

  $peliculas = [
              ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
              ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
              ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
              ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
              ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
              ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
              ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
              ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
              ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
              ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama']
            ];

    foreach ($peliculas as $key => $value) {
      if ($value['title'] == $titulo) {
        return $value['title'];
      }
    }

    return "La pelicula no existe";

});
