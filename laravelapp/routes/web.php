<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Http\Middleware\HelloMiddleware;
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

Route::get('hello', 'App\Http\Controllers\HelloController@index')
        ->middleware(HelloMiddleware::class);
Route::post('hello', 'App\Http\Controllers\HelloController@post');

Route::get('top', 'App\Http\Controllers\HelloController@test');
Route::post('top', 'App\Http\Controllers\HelloController@test_post');

Route::get('OverView','App\Http\Controllers\HelloController@OverView');
Route::get('Business','App\Http\Controllers\HelloController@Business');
Route::get('Contact','App\Http\Controllers\HelloCOntroller@Contact');
?>