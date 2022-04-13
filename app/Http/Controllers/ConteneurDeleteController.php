<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\ConteneurTri;
use App\PointDeCollecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConteneurDeleteController extends Controller
{
   
    
    
    public function deleteConteneur($id){
        $conteneur = ConteneurTri::find($id);
        if(!is_null($conteneur)){
            $conteneur->delete();
        }
        $conteneurs = ConteneurTri::all();
        return view('pages/adminCont')->with('conteneurs',$conteneurs);
        
    }

    public function DeletePointDeCollecte($id){
        $pointCollecte = PointDeCollecte::find($id);
        if(!is_null($pointCollecte)){
            $pointCollecte->test()->delete();
            $pointCollecte->delete();
        }
        $pdc = PointDeCollecte::all();
        return view('pages/adminPc')->with('point_de_collectes',$pdc);
        
    }
    
}
