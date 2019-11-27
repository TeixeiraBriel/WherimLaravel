<?php


Route::get('/', 'Controller@index');
Route::get('/rotas', 'Controller@rotas');
Route::get('/eventos', 'eventosController@index');
Route::get('/eventos/create', 'eventosController@create');
Route::post('/eventos/create', 'eventosController@store');


