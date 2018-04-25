<?php

use App\ShoppingList;
use Illuminate\Http\Request;

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


//Api Login
Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\Register  Controller@register');



Route::group(['middleware' => 'auth:api'], function() {
    Route::get('shoppinglists', 'ShoppingListController@index');
    Route::get('shoppinglists/{id}', 'ShoppingListController@show');
    Route::post('shoppinglists', 'ShoppingListController@store');
    Route::put('shoppinglists/{id}', 'ShoppingListController@update');
    Route::delete('shoppinglists/{id}', 'ShoppingListController@delete');
});






