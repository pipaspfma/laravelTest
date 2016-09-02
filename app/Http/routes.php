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

//GUEST --- not working ---

Route::get('/about', 'IndexController@about');

Route::get('/contacts', 'IndexController@contacts');

Route::get('/search/{text}', 'IndexController@simpleSearch');

Route::get('/advancedSearch/{text}','HomeController@advancedSearch');

Route::get('/advancedSearch/{text}','HomeController@advancedSearch');

Route::post('newsletter', 'HomeController@newsletter');

Route::get('/jobOffer/{id}', 'JobOfferController@show');
// para testes

Route::get('/report' , 'BackOfficeController@report');

Route::group(['middleware' => ['auth']], function()
{
    //Registered only
    Route::get('/settings', 'BackOfficeController@index');
    Route::post('/settings/addLogo', 'BackOfficeController@addLogo');

// --- not working ---
    Route::get('/message', 'MessageController@index');
    Route::get('/message/{id}', 'MessageController@show');
    Route::get('/message/new', 'MessageController@');
    Route::get('/message/new', 'MessageController@store');

//candidate only -- need to change to /curriculum ...
    Route::post('/settings/addCV', 'BackOfficeController@addCV');
    Route::get('/curriculum', 'CandidateController@curriculum');
    Route::post('/curriculum/new', 'CandidateController@storeCurriculum');
    Route::get('/favorite', 'CandidateController@favorite');
// --- not working ---


    Route::get('/curriculum/new', 'CandidateController@addCurriculum'); // probably need some changes

    Route::post('/curriculum/{id}/delete', 'CandidateController@deleteCurriculum');

//Company only
    Route::get('/jobOffer', 'JobOfferController@index');

    Route::get('/jobOffer/create', 'JobOfferController@formCreate');

    Route::post('/jobOffer/create', 'JobOfferController@store');


// --- not working ---

});




