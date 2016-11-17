<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


$api->version('v1', function ($api) {
   
    $api->get('users', 'App\Http\Controllers\Api\UserController@index');
    $api->get('users/{id}', 'App\Http\Controllers\Api\UserController@show');
    $api->post('users/create', 'App\Http\Controllers\Api\UserController@store');
    
    
    $api->delete('users/{id}', 'App\Http\Controllers\Api\UserController@destroy');

    
    
    /*
    * Articles routes
    */
    //Route::get('articles', 'ArticlesController@index');
    //Route::get('articles/create', 'ArticlesController@create');
    //Route::get('articles/{id}', 'ArticlesController@show');
    //Route::post('articles', 'ArticlesController@store');
    //Route::get('articles/{id}/edit', 'ArticlesController@edit');
    //Route::patch('articles/{id}', 'ArticlesController@update');
    //Route::delete('articles/{id}', 'ArticlesController@destroy');

    //Route::resource('articles', 'ArticlesController');
    
    
});


