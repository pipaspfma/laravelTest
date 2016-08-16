<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/teste' , function(){
    return view('auth.register1');
});


//incompletos

Route::get('/about', 'IndexController@about');

Route::get('/contacts', 'IndexController@contacts');


//por usar

Route::get('/search/{text}', 'IndexController@simpleSearch');

Route::get('advancedSearch','HomeController@advandecSearch');

Route::post('newsletter', 'HomeController@newsletter');