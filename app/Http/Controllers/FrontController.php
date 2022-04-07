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
        $items = PointDeCollecte::pluck('nom_point_collecte', 'id');
    


        $conteneurs = ConteneurTri::all(); 
    
        return view('pages/adminCont', compact(['conteneurs','idt', 'items']));
    }

    public function adminContEdit(){
        return view('pages/adminContEdit');
    }

    public function adminContListe(){
        return view('pages/adminContListe');
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