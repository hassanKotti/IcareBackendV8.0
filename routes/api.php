<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register', 'Api\RegisterController@register');
Route::post('login', 'Api\RegisterController@login');
Route::get('logout', 'Api\RegisterController@logout');

Route::get('specializations', 'Api\SpecializationController@index');
Route::resource('doctors', 'Api\DoctorsController');
Route::get('specializations/{specialization}/doctors', 'Api\SpecializationController@doctors');
Route::resource('articles', 'Api\ArticleController');
