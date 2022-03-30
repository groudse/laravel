<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\ConteneurTri;
use App\PointDeCollecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConteneurDeleteController extends Controller
{
   
    public function index(){
   $conteneurs = ConteneurTri::all();
   return view('pages/adminCont')->with('conteneurs',$conteneurs);
   
}
    
    public function deleteConteneur($id){
        $conteneur = ConteneurTri::find($id);
        if(!is_null($conteneur)){
            $conteneur->delete();
        }
        $conteneurs = ConteneurTri::all();
        return view('pages/adminCont')->with('conteneurs',$conteneurs);
        
    }

    /*public function pick($id){
        $pdc = PointDeCollecte::find($id);
        if(!is_null($pdc)){
            $var = $pdc->point_de_collecte_id;
        }
        $conteneurs = ConteneurTri::with('pointdecollectes')->get(); 
        return view('pages/adminCont', compact(['conteneurs',]);
        
    }*/
    
}
