<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('test');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('vols','VolController');
Route::post('comments/comment','commentsController@store');
Route::get('comments/comment','commentsController@index');
Route::post('commentdelete','commentsController@destroy');
Route::post('commentupdate','commentsController@update');
Route::post('commentsubmit','commentsController@show');
Route::resource('/entreprise','EntrepriseController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('vols','VolController');
Route::post('likes','likesController@store');
Route::post('dislikes','dislikesController@store');

Route::resource('/entreprise','EntrepriseController');
