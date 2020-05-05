<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('book','API\bookController');
Route::resource('publisher','API\publisherController');
Route::resource('subagent','API\subagentController');
Route::resource('member','API\memberController');

Route::get('storeanalyse','API\storeanalyseController@index');

Route::get('publisherbooklist/{id}','API\bookController@publisherbooklist');

Route::get('returnlist','API\subagentController@showReturnlist');
Route::get('returnlistdata/{id}','API\subagentController@showReturnlistdata');

Route::get('deletereturnlist/{id}','API\subagentController@deleteReturnlist');
Route::get('subagentbooklist/{id}','API\subagentController@subagentbooklist');

Route::get('memberbooklist/{id}','API\memberController@memberbooklist');

// Route::get('storereturnbook','API\subsideController@store');
// Route::get('returnbook','API\subsideController@showreturnlist');
Route::get('orderlist/{id}','API\subsideController@orderlist');
Route::get('order1/{id}','API\bookController@sub1orderlist');
Route::get('order2/{id}','API\bookController@sub2orderlist');
Route::get('order3/{id}','API\bookController@sub3orderlist');
Route::get('order4/{id}','API\bookController@sub4orderlist');
Route::get('order5/{id}','API\bookController@sub5orderlist');

Route::get('total1','API\subagentController@total1');
Route::get('total2','API\subagentController@total2');
Route::get('total3','API\subagentController@total3');
Route::get('total4','API\subagentController@total4');
Route::get('total5','API\subagentController@total5');

Route::get('return1','API\subagentController@return1');
Route::get('return2','API\subagentController@return2');
Route::get('return3','API\subagentController@return3');
Route::get('return4','API\subagentController@return4');
Route::get('return5','API\subagentController@return5');