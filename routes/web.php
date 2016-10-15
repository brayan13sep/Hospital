<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function()
    {
        return View::make('home');
    });
Route::get('/hospital/public/login', function()
    {
        return View::make('login');
    });
Route::get('/hospital/public/certificados', function()
    {
        return View::make('/forms/certificados');
    });

//Prueba insertar datos de madre 

Route::get('/hospital/public/madreform',array('madre'=>'MadreController@mFormulario'));
Route::post('/hospital/public/madreform',array('madre'=>'MadreController@iFormulario'));
Route::get('/hospital/public/madreform',array('madre'=>'MadreController@lFormulario'));



Route::get('/hospital/public/neonatoform', function()
    {
        return View::make('/forms/neonato');
    });
Route::get('/hospital/public/profesionalforms', function()
    {
        return View::make('/forms/profesional');
    });