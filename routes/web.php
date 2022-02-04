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
    'uses' => 'App\Http\Controllers\FrontController@adminPc',
    ]);

Route::get ('/admin_index/adminpc/edit', [
   'as' => 'adminpc-edit_path',
    'uses' => 'App\Http\Controllers\FrontController@adminPcEdit',
    ]);

Route::get ('/admin_index/adminpc/liste', [
    'as' => 'adminpc-liste_path',
    'uses' => 'App\Http\Controllers\FrontController@adminPcListe',
    ]);

Route::get ('/admin_index/admincont', [
    'as' => 'admincont_path',
    'uses' => 'App\Http\Controllers\FrontController@adminCont',
    ]);

Route::get ('/admin_index/admincont/edit', [
    'as' => 'admincont-edit_path',
    'uses' => 'App\Http\Controllers\FrontController@adminContEdit',
    ]);

Route::get ('/admin_index/admincont/liste', [
    'as' => 'admincont-liste_path',
    'uses' => 'App\Http\Controllers\FrontController@adminContListe',
    ]);


Route::get ('/gestion_index/liste', [
    'as' => 'gestion-liste_path',
    'uses' => 'App\Http\Controllers\FrontController@gestionListe',
    ]);

Route::get ('/gestion_index/rapport', [
    'as' => 'rapport_path',
    'uses' => 'App\Http\Controllers\FrontController@gestionRapport',
    ]);

Route::get ('/gestion_index/rapport/edit', [
    'as' => 'rapport-edit_path',
    'uses' => 'App\Http\Controllers\FrontController@gestionRapportEdit',
    ]);

