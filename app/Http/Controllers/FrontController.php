<?php

namespace App\Http\Controllers;

use App\Leve;
use App\ConteneurTri;
use App\PointDeCollecte;
use App\HistoriqueConteneurTri;
use App\ConteneurTriPointDeCollecte;
use Dompdf\Dompdf;


use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FrontController extends Controller
{
    /*Accueil*/
    public function accueil(){ 
        $ledves = Leve::all()->last();
        $leves = PointDeCollecte::all();
        return view('pages/accueil', compact(['leves']));
    }

    




    /*Partie administration*/
    

    public function admincont(){ 
        $items = PointDeCollecte::pluck('nom_point_collecte', 'id');
    

        $conteneurs = ConteneurTri::all(); 

        
        //$allp = ConteneurTri::find(2);
        
        return view('pages/adminCont', compact(['conteneurs', 'items']));
    }

    public function adminContEdit(){

        return view('pages/adminContEdit');
    }

    public function adminContListe($id){
       
         $contByPdc = PointDeCollecte::find($id)->ConteneurTris()->get();
        
         $pdcUnique = PointDeCollecte::where('id', $id)->take(1)->get();

         $conts = PointDeCollecte::find($id)->getConteneurTrisByPointCollecte($id);

         $associate = PointDeCollecte::find($id)->LinkContToPdc($id);
         
         $lastLevee = PointDeCollecte::find($id)->HistoriqueConteneurTris()->get();
        return view('pages/adminContListe', compact(['contByPdc', 'pdcUnique','lastLevee']));
    }

  

    public function adminpc(){ 
        $pdc = PointDeCollecte::all();
        return view('pages/adminPc')->with('point_de_collectes',$pdc);
    }

    public function adminPcEdit(){
        $conteneurs = ConteneurTri::all();
        return view('pages/adminPcEdit')->with('conteneurs', $conteneurs);
    }

    public function adminPcListe(){
        $pdc = PointDeCollecte::all();
        return view('pages/adminPcListe')->with('point_de_collectes',$pdc);
    }


    public function gestionRapport($id){
        $leves = PointDeCollecte::find($id)->Leves()->get();
        //dd($leves); 
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pages/gestionRapport', compact (['leves'])));
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream('demo.pdf');
 
        return view('pages/gestionRapport', compact (['leves']));
    }


    public function leves($id)
    {
        $saveLast = ConteneurTri::find($id)->saveLastLevee($id);

        return redirect ('/accueil');
    }



  

}