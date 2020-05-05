<?php

use Carbon\Carbon;
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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/mainsub', 'HomeController@index');

Route::get('/payment', 'recievebookController@payment');

Route::get('/recievebook', function (){
	$date = Carbon::now();
    $dow = [$date->dayOfWeek];
    return view('recievebook',['dow'=>$dow[0]]);
})->middleware('auth');


Route::get('/returnlist', 'subagentController@returnlist');
Route::get('/returnlistdata/{id}', function($id){
	$i = [$id];
	return view('returnlistdata',['data'=>$i[0]]);
})->middleware('auth');


Route::resource('book','bookController');
Route::resource('publisher','publisherController');
Route::resource('subagent','subagentController');
Route::resource('member','memberController');
Route::resource('storeanalyse','storeanalyseController');
Route::resource('subside','subsideController@store');

Route::get('/publisherdetail/{id}', function($id){
	$i = [$id];
	return view('publisherdetail',['data'=>$i[0]]);
})->middleware('auth');
Route::get('/subagentdetail/{id}', function($id){
	$i = [$id];
	return view('subagentdetail',['data'=>$i[0]]);
})->middleware('auth');
Route::get('/memberdetail/{id}', function($id){
	$i = [$id];
	return view('memberdetail',['data'=>$i[0]]);
})->middleware('auth');

Route::get('/subrecievelist/{id}', function($id){
	$i = [$id];

	return view('subside.subrecievelist',['data'=>$i[0]]);
})->middleware('auth');

Route::get('/subreturnlist/{id}', function ($id){
	$date = Carbon::now();
    $month = [$date->month];
    $m = $month[0];
    $input = [$id];
    $i = $input[0];
    return view('subside.returnlist',compact('m','i'));
})->middleware('auth');



