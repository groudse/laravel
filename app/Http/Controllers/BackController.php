<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConteneurTri;
use App\PointDeCollecte;
use App\HistoriqueConteneurTri;
use App\ConteneurTriPointDeCollecte;

class BackController extends Controller
{
    function save_cont(Request $req)
	{
		
		$conteneur = new ConteneurTri();
		
		$conteneur->nom_conteneur = $req->nom_conteneur;
		$conteneur->type_tri = $req->type_tri;
		$conteneur->hauteur = $req->hauteur;
		$conteneur->adresse_modem = $req->adresse_modem;
		$conteneur->save();
		return view('pages/adminContEdit');
	}


	
	function save_pc(Request $req)
	{
		
		$point_de_collecte = new PointDeCollecte();
		$point_de_collecte->nom_point_collecte = $req->nom_point_collecte;
		$point_de_collecte->adresse = $req->adresse;
		$point_de_collecte->ville = $req->ville;
		$point_de_collecte->latitude = $req->latitude;
		$point_de_collecte->longitude = $req->longitude;
		$point_de_collecte->code_postal = $req->code_postal;
		$point_de_collecte->save();
		return view('pages/adminPcEdit');
	}




	public function deleteConteneur($id){
        $conteneur = ConteneurTri::find($id);
		$pdc = ConteneurTri::find($id)->PointDeCollectes()->get();
		
        if(!is_null($conteneur)){
            $conteneur->delete();
        }
        $conteneurs = ConteneurTri::all();
        return redirect("/admin_index/admincont/liste/{$pdc[0]->id}");
        
    }

    public function DeletePointDeCollecte($id){
        $pointCollecte = PointDeCollecte::find($id);
        if(!is_null($pointCollecte)){
            $pointCollecte->ContTriPdc()->delete();
            $pointCollecte->delete();
        }
        $pdc = PointDeCollecte::all();
        return view('pages/adminPc')->with('point_de_collectes',$pdc);
        
    }



}
