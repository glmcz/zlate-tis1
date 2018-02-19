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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'IndexController@index',
    'as' => 'index.index']);

Route::get('/polytate', [
    'uses' => 'IndexController@polytate',
    'as' => 'index.one']);


Route::get('/post/{post}', [
    'uses' => 'IndexController@post',
    'as' => 'index.post']);

Route::get('/category/{category}',[
    'uses' => 'CategoryController@index',
    'as' => 'pages.psychologie']);

Route::get('/category/post/{post}', [
    'uses' => 'CategoryController@post',
    'as' => 'index.post']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('all/{category}','CategoryController@show');
