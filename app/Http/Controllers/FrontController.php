<?php

namespace App\Http\Controllers;

use App\Leve;
use App\ConteneurTri;
use App\PointDeCollecte;
use App\HistoriqueConteneurTri;

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
        $conteneurs = ConteneurTri::all(); 
      // $conteneurs = ConteneurTri::with('HistoriqueConteneurTri')->get();
       //echo $conteneurs; 
       $lien = PointDeCollecte::all();
        $point_de_collectes = PointDeCollecte::all();
        //return view('pages/adminCont')->with('conteneurs', $conteneurs);
        return view('pages/adminCont', compact(['conteneurs', 'point_de_collectes','lien']));
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
        return view('pages/gestionListe');
    }

    public function gestionRapport(){
        return view('pages/gestionRapport');
    }

    public function gestionRapportEdit(){
        return view('pages/gestionRapportEdit');
    }
}