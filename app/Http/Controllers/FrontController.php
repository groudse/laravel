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
        $leves = Leve::all()->last();
        return view('pages/accueil')->with('leves', $leves);
    }

    




    /*Partie administration*/
    

    public function admincont(){ 
         $conteneurs = ConteneurTri::with('pointdecollectes')->get(); 
        // $tous = ConteneurTriPointDeCollecte::all();
      // $conteneurs = ConteneurTri::with('HistoriqueConteneurTri')->get();
       //echo $conteneurs; 
    //    $po = PointDeCollecte::all();
      // $point_de_collectes = PointDeCollecte::with('Conteneurs', 'point')->get();
       // $point_de_collectes = PointDeCollecte::find(1);
        //return view('pages/adminCont')->with('conteneurs', $conteneurs);
        return view('pages/adminCont', compact(['conteneurs']));
;      
    }

    public function adminContEdit(){
        return view('pages/adminContEdit');
    }

    public function adminContListe(){
        return view('pages/adminContListe');
    }


    public function adminpc(){ 
        $point_de_collectes = PointDeCollecte::all();
        return view('pages/adminPc')->with('point_de_collectes', $point_de_collectes);
    }

    public function adminPcEdit(){
        $conteneurs = ConteneurTri::all();
        return view('pages/adminPcEdit')->with('conteneurs', $conteneurs);
    }

    public function adminPcListe(){
        return view('pages/adminPcListe');
    }

    /*Partie gestion*/
    public function gestionListe(){
        $conteneur = ConteneurTri::find($id);
        $PointDeCollecte = $conteneur->PointDeCollectes();
        return view('pages/gestionListe')->with('PointDeCollecte',$PointDeCollecte)->with('ConteneurTri',$conteneur);
    }

    public function gestionRapport(){
        return view('pages/gestionRapport');
    }

    public function gestionRapportEdit(){
        return view('pages/gestionRapportEdit');
    }
}