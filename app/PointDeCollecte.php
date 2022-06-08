<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BackController;


class PointDeCollecte extends Model
{
  

    public function HistoriqueConteneurTris(){  
        return $this->hasMany(HistoriqueConteneurTri::class,'point_de_collecte_id'); 
    }

    public function leves(){  
        return $this->hasMany(Leve::class,'point_de_collecte_id'); 
    }

    public function ConteneurTris(){  
        return $this->belongsToMany('App\ConteneurTri', 'conteneur_tri_point_de_collectes'); 
    }

    public function ContTriPdc(){
        return $this->hasMany(ConteneurTriPointDeCollecte::class, 'point_de_collecte_id');
    }

   




/**
 * @fn getContenurTrisByPointCollecte($idPointCollecte)
 * @brief Liste les conteneurs à moins de 100 mètres du point de collecte passés en paramètre 
 * @param idPointCollecte
 * @return contOnPdc
 */



    public function getConteneurTrisByPointCollecte($idPointCollecte)
    { 
        $pdc = PointDeCollecte::find($idPointCollecte);
      
        $reqSql = "SELECT *,(6371000 * Acos (Cos (Radians('" .$pdc->latitude. "')) * Cos(Radians(latitude)) *
                         Cos(Radians(longitude) - Radians('" .$pdc->longitude. "'))
                           + Sin (Radians('" .$pdc->latitude. "')) *
                             Sin(Radians(latitude)))
            ) AS distance_m
        FROM   conteneur_tris
        HAVING distance_m < 100
        ORDER  BY distance_m; ";
        
    $contOnPdc =  DB::select(DB::raw($reqSql)) ;
   
        return $contOnPdc;
        
    }


/**
 * @fn LinkContToPdc($idPointCollecte)
 * @brief Lie automatiquement 1 point de collecte à plusieurs conteneurs grâce à la fonction getContenurTrisByPointCollecte($idPointCollecte) 
 * ou mets à jour les indormations 
 * @param idPointCollecte
 */

    public function LinkContToPdc($idPointCollecte){

        $pdc = PointDeCollecte::find($idPointCollecte);

        $final = PointDeCollecte::getConteneurTrisByPointCollecte($idPointCollecte);
     
        for($i = 0; $i<count($final); $i++){

        $reqTestExist = DB::select("SELECT * FROM conteneur_tri_point_de_collectes WHERE conteneur_tri_id= '".$final[$i]->id."';");
       
   
            
            if(!empty($reqTestExist)){
                $updateContenur = DB::update("UPDATE conteneur_tri_point_de_collectes 
                SET point_de_collecte_id = '".$pdc->id."',
                updated_at = now()
                WHERE conteneur_tri_id = '".$final[$i]->id."';");
                
            }else{
                $addConteneur = DB::insert("INSERT INTO 
                conteneur_tri_point_de_collectes (conteneur_tri_id, point_de_collecte_id,created_at,updated_at) VALUES ('".$final[$i]->id."','".$pdc->id."',now(),now());");
                
            }
            
           
        }
        
    }

    public function checkStatus($id){
        
        $Pdc = PointDecollecte::find($id);
        $cont = PointDeCollecte::find($id)->ConteneurTris($id)->get();

        $getPdc = DB::select("SELECT COUNT(conteneur_tri_id) from historique_conteneur_tris 
            WHERE point_de_collecte_id='".$id."'");

        $getContStatut = DB::select("SELECT * from historique_conteneur_tris WHERE point_de_collecte_id='".$id."'");

        $count = 0;
        $final = " ";
        
            for($i=0; $i<count($getContStatut); $i++){
                
                $tracker = "La batterie du";
                $action = "veuillez la remplacer.";
                $aim = "batterie";
                
                
                
                if($getContStatut[$i]->remplissage >= 70 or  $getContStatut[$i]->batterie <= 30){

                    if($getContStatut[$i]->remplissage >= 70){
                            $tracker = "Le remplissage du";
                            $action = "veuillez vider le conteneur.";
                            $aim = "remplissage";
                    }


                    
                        $mailFin = " ".$tracker."  ".$cont[$i]->nom_conteneur." situé au ".$Pdc->nom_point_collecte." est à ".$getContStatut[$i]->$aim." % ".$action."";
                        $final  = $final." ".$mailFin;
                        $count = 1;
                }
                
                
            }
            if($count == 1){
            $details = [
            'title' => $final,
            
                ];

                
                \Mail::to('vocsplay@gmail.com')->send(new \App\Mail\MyTestMail($details));
            }
            
    }




    public function dernierCont()
    {
        $var = ConteneurTriPointDeCollecte::where('point_de_collecte_id', $this->id)->first();
       
        return ConteneurTri::where('id', $var->conteneur_tri_id)->first();
       
    
    }

}
