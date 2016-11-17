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
//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');


$api->version('v1', function ($api) {
   
    //$api->get('users', 'App\Http\Controllers\Api\UserController@index');
    $api->get('users/{id}', 'App\Http\Controllers\Api\UserController@show');
    $api->post('users/create', 'App\Http\Controllers\Api\UserController@store');
    $api->put('users/{id}', 'App\Http\Controllers\Api\UserController@update'); 
    $api->delete('users/{id}', 'App\Http\Controllers\Api\UserController@destroy');
    
     
    $api->post('authenticate', 'App\Http\Controllers\Api\AuthenticateController@authenticate');
    
    
    $api->group(['middleware' => 'jwt.auth'], function ($api) {
        
        $api->get('users', 'App\Http\Controllers\Api\UserController@index');
         
    });

    
    
    //$api->resource('users', 'App\Http\Controllers\Api\UserController');
    
   

    
});


