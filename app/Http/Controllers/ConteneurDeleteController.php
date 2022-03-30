<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\ConteneurTri;
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
    
}
