<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Page;

class ConteneurTri extends Model
{
    

    public function HistoriqueConteneurTris(){  
        return $this->hasMany(HistoriqueConteneurTri::class,'conteneur_tri_id'); 
    }

    public function leves(){  
        return $this->hasMany('App\Leve','conteneur_tri_id'); 
    }

    public function PointDeCollectes(){  
        return $this->belongsToMany('App\PointDeCollecte', 'conteneur_tri_point_de_collectes'); 
    }

    public function saveLastLevee($idConteneur){
        
        $reqRemplissage = DB::select("SELECT remplissage from historique_conteneur_tris where conteneur_tri_id= '".$idConteneur."' ORDER BY date DESC LIMIT 1;");
        $reqDate =  DB::select("SELECT date from historique_conteneur_tris where conteneur_tri_id= '".$idConteneur."' ORDER BY date DESC LIMIT 1;");
        $reqPdc = DB::select("SELECT point_de_collecte_id from conteneur_tri_point_de_collectes where conteneur_tri_id= '".$idConteneur."';");

       

       $reqContStatus = DB::insert("INSERT INTO leves (date, remplissage, point_de_collecte_id, conteneur_tri_id, created_at, updated_at) VALUES 
       ('".$reqDate[0]->date."','".$reqRemplissage[0]->remplissage."','".$reqPdc[0]->point_de_collecte_id."','".$idConteneur."',now(),now()) ;");     

        
    }

    public function getLastLevee($idConteneur){
        
        $last = DB::select("SELECT * from historique_conteneur_tris WHERE point_de_collecte_id='".$idConteneur."'ORDER BY date DESC LIMIT 1; ");

        $lastLev =  DB::select(DB::raw($last)) ;
        return $lastLev;
    }
}