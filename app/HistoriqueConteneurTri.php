<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class HistoriqueConteneurTri extends Model
{
    public function ConteneurTri(){  
        return $this->belongsTo(ConteneurTri::class,'conteneur_tri_id'); 
    }

    public function PointDeCollecte(){  
        return $this->belongsTo(PointDeCollecte::class,'point_de_collecte_id'); 
    }
}
