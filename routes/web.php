<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', 'HomeController@index');
Route::get('/register', 'AuthController@form');
Route::get('/welcome', 'AuthController@welcome_get');
Route::post('/welcome', 'AuthController@welcome');
Route::get('/{isi}', function($isi) {
    return $isi;
});
