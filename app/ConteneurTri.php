<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ConteneurTri extends Model
{
    // public function PointDeCollectes(){  
    //     return $this->belongsToMany(PointDeCollecte::class, 'conteneur_tri_point_de_collectes'); 
    // }

    public function HistoriqueConteneurTris(){  
        return $this->hasMany(HistoriqueConteneurTri::class,'conteneur_tri_id'); 
    }

    public function leves(){  
        return $this->hasOne(Leve::class,'conteneur_tri_id'); 
    }

    public function PointDeCollectes(){  
        return $this->belongsToMany('App\PointDeCollecte', 'conteneur_tri_point_de_collectes'); 
    }

    
}
