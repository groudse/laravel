<?php

namespace App\Http\Controllers;

use App\Leve;
use App\ConteneurTri;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /*Accueil*/
    public function accueil(){ 
        $leves = Leve::all()->last();
        return view('pages/accueil')->with('leves', $leves);
    }

    /*public function accuei(){ 
        $leves = Leve::all()->last();
        
        return view('pages/gestion')->with('leves', $leves);; 
    }*/




    /*Partie administration*/
    public function adminpc(){ 
        return view('pages/adminpc'); 
    }

    public function admincont(){ 
        $conteneurs = ConteneurTri::all();
        return view('pages/admincont')->with('conteneurs', $conteneurs); 
    }


    /*Partie gestion*/
    public function leve(){ 
        return view('pages/leve'); 
    }

    public function rapport(){ 
        return view('pages/rapport'); 
    }

    public function pointcollec(){ 
        return view('pages/pointcollec'); 
    }
    

    

    
}









