<?php

use App\ConteneurTri;
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

use Dompdf\Dompdf;

Route::get('/', function () {
    // instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml(view('pages/accueil'));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('demo.pdf');
    
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




Route::get ('/accueil', [
    'as' => 'accueil_path',
    'uses' => 'App\Http\Controllers\FrontController@accueil',
    ]);




Route::middleware(['auth'])->group(function () {

    
        Route::get ('/admin_index/admincont/liste/{id}', [
            'as' => 'ContByPDC_path',
            'uses' => 'App\Http\Controllers\FrontController@adminContListe',
            ]);

     



        Route::get ('/gestion_index/rapport/{id}', [
            'as' => 'rapport_path',
            'uses' => 'App\Http\Controllers\FrontController@gestionRapport',
            ]);

       

        Route::get ('/admin_index/adminpc/edit', [
            'as' => 'adminpc-edit_path',
            'uses' => 'App\Http\Controllers\FrontController@adminPcEdit',
            ]);
            
            
        Route::get ('/admin_index/admincont', [
            'as' => 'admincont_path',
            'uses' => 'App\Http\Controllers\FrontController@adminCont',
            ]);
            

        Route::get ('/admin_index/adminpc/delete/{id}', [
            'as' => 'DeletePointDeCollecte_path',
            'uses' => 'App\Http\Controllers\BackController@DeletePointDeCollecte',
            ]);
            
        Route::get ('/admin_index/admincont/delete/{id}', [
            'as' => 'DeleteConteneur_path',
            'uses' => 'App\Http\Controllers\BackController@deleteConteneur',
            ]);

        Route::get ('/admin_index/adminpc', [
            'as' => 'adminpc_path',
            'uses' => 'App\Http\Controllers\FrontController@adminPc',
            ]);
                
                
        Route::get ('/admin_index/admincont/edit', [
            'as' => 'admincont-edit_path',
            'uses' => 'App\Http\Controllers\FrontController@adminContEdit',
            ]);   


        Route::post('/admin_index/admincont/edit', [
            
            'as' => 'BackControllerSaveCont_path',
            'uses' => 'App\Http\Controllers\BackController@save_cont',
            
        ]);


        Route::post('/admin_index/adminpc/edit', [
            'as' => 'BackControllerSavePc_path',
            'uses' => 'App\Http\Controllers\BackController@save_pc',
        ]);



});


Route::get ('/gestion_index/leve/{id}', [
    'as' => 'leve_path',
    'uses' => 'App\Http\Controllers\FrontController@leves',
    ]);

