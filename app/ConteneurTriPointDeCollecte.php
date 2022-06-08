<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ConteneurTriPointDeCollecte extends Model
{
    public function te(){
        return $this->belongsToMany('App\PointDeCollecte');
    }
}

