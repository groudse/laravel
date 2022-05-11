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
        return $this->hasOne(Leve::class,'conteneur_tri_id'); 
    }

    public function PointDeCollectes(){  
        return $this->belongsToMany('App\PointDeCollecte', 'conteneur_tri_point_de_collectes'); 
    }

    public function saveLastLevee($idConteneur){
        
        $reqRemplissage = DB::select("SELECT remplissage from historique_conteneur_tris where conteneur_tri_id= '".$idConteneur."';");
        $reqDate =  DB::select("SELECT updated_at from historique_conteneur_tris where conteneur_tri_id= '".$idConteneur."';");
        $reqPdc = DB::select("SELECT point_de_collecte_id from conteneur_tri_point_de_collectes where conteneur_tri_id= '".$idConteneur."';");

        //dd($reqDate[0]->updated_at);

       $reqContStatus = DB::insert("INSERT INTO leves (date, remplissage, point_de_collecte_id, conteneur_tri_id, created_at, updated_at) VALUES 
       ('".$reqDate[0]->updated_at."','".$reqRemplissage[0]->remplissage."','".$reqPdc[0]->point_de_collecte_id."','".$idConteneur."',now(),now()) ;");

      
       
              

        
    }
}