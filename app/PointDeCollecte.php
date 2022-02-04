<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PointDeCollecte extends Model
{
    public function ConteneurTris(){  
        return $this->belongsToMany(ConteneurTri::class, 'conteneur_tri_point_de_collectes'); 
    }

    public function HistoriqueConteneurTris(){  
        return $this->hasMany(HistoriqueConteneurTri::class,'point_de_collecte_id'); 
    }

    public function leves(){  
        return $this->hasMany(Leve::class,'point_de_collecte_id'); 
    }
}
