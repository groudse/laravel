<?php

namespace App\Http\Controllers;

use App\Leve;
use App\ConteneurTri;
use App\PointDeCollecte;
use App\HistoriqueConteneurTri;
use App\ConteneurTriPointDeCollecte;



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
        $allp = ConteneurTri::find(2);
    
        return view('pages/adminCont', compact(['conteneurs', 'items']));
    }

    public function adminContEdit(){

        return view('pages/adminContEdit');
    }

    public function adminContListe($id){
       
         $contByPdc = PointDeCollecte::find($id)->ConteneurTris()->get();
        
         $pdcUnique = PointDeCollecte::where('id', $id)->take(1)->get();

         $conts = PointDeCollecte::find($id)->getContenurTrisByPointCollecte($id);

         $associate = PointDeCollecte::find($id)->LinkContToPdc($id);
         
         
  
        return view('pages/adminContListe', compact(['contByPdc', 'pdcUnique']));
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

    /*Partie gestion*/
    public function gestionListe(){
        //$conteneur = ConteneurTri::find($id);
        //$PointDeCollecte = $conteneur->PointDeCollectes();
        //return view('pages/gestionListe')->with('PointDeCollecte',$PointDeCollecte)->with('ConteneurTri',$conteneur);
    }

    public function gestionRapport(){
        return view('pages/gestionRapport');
    }

    public function gestionRapportEdit(){
        return view('pages/gestionRapportEdit');
    }
}