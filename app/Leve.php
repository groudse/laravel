<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Leve extends Model
{
    public function PointDeCollecte(){  
        return $this->belongsTo(PointDeCollecte::class,'point_de_collecte_id'); 
    }

    public function ConteneurTri(){  
        return $this->belongsTo(ConteneurTri::class,'conteneur_tri_id'); 
    }
}
