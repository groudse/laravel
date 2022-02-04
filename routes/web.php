<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now cresate something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get ('/accueil', [
    'as' => 'accueil_path',
    'uses' => 'App\Http\Controllers\FrontController@accueil',
    ]);

Route::get ('/admin_index/adminpc', [
    'as' => 'adminpc_path',
    'uses' => 'App\Http\Controllers\FrontController@adminpc',
    ]);

Route::get ('/admin_index/adminpc/edit', [
   'as' => 'adminpc_path',
    'uses' => 'App\Http\Controllers\FrontController@adminpc',
    ]);

Route::get ('/admin_index/admincont', [
    'as' => 'admincont_path',
    'uses' => 'App\Http\Controllers\FrontController@admincont',
    ]);


Route::get ('/gestion_index/leve', [
    'as' => 'leve_path',
    'uses' => 'App\Http\Controllers\FrontController@leve',
    ]);

Route::get ('/gestion_index/rapport', [
    'as' => 'rapport_path',
    'uses' => 'App\Http\Controllers\FrontController@rapport',
    ]);

Route::get ('/gestion_index/pointcollecte', [
    'as' => 'pointcollec_path',
    'uses' => 'App\Http\Controllers\FrontController@pointcollec',
    ]);

