<?php

namespace App\Http\Controllers;

use App\Leve;
use App\ConteneurTri;
use App\PointDeCollecte;
use App\HistoriqueConteneurTri;
use App\ConteneurTriPointDeCollecte;
use Dompdf\Dompdf;


use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FrontController extends Controller
{
    /*Accueil*/
    public function accueil(){ 
        $pdc = PointDeCollecte::all();
       
        
        $pdcMap = array();




        
        // construit le tableau des marqueurs de balises (pour la carte)
        foreach ($pdc as $rcont) {
            
            // crée le lien vers la fiche balise
            $lien = "<a href=\"" . route('ContByPDC_path', ['id' => $rcont->id]) . "\"> </a>";
            
            
            
            // récupère le relevé le plus récent
            $releveCont = $rcont->dernierCont();
            
            if ($releveCont){
               
                // crée le HTML d'info sur la balise
                $infosCont = "<p> Nom : " . $releveCont["nom_conteneur"] . "</p>";
                
                $infosCont .= "<p> Remplissage : " . $releveCont->HistoriqueConteneurTris()->get('remplissage') . "</p>";
                
                $infosCont .= "<p> Batterie : " . $releveCont->HistoriqueConteneurTris()->get('batterie') . "</p>";
                
            }
            // construit le descripteur de marqueur de balise (c'est une chaîne de caractère)
            $infosMarker = $lien . $infosCont;
          
            // ajoute le marqueur au tableau, avec sa géolocalisation
            $pdcMap[$infosMarker] = array('lat' => $rcont->latitude, 'lon' => $rcont->longitude);
            

                 

        }
        return view('pages/accueil', compact(['pdc','pdcMap']));
    }




    




    /*Partie administration*/
    

    public function admincont(){ 
        $items = PointDeCollecte::pluck('nom_point_collecte', 'id');
    

        $conteneurs = ConteneurTri::all(); 

        
        
        return view('pages/adminCont', compact(['conteneurs', 'items']));
    }

    public function adminContEdit(){
        return view('pages/adminContEdit');
    }

    public function adminContListe($id){
       
         $contByPdc = PointDeCollecte::find($id)->ConteneurTris()->get();
         $pdcUnique = PointDeCollecte::where('id', $id)->take(1)->get();
         $conts = PointDeCollecte::find($id)->getConteneurTrisByPointCollecte($id);
         $associate = PointDeCollecte::find($id)->LinkContToPdc($id);
         $mail = PointDeCollecte::find($id)->checkStatus($id);
         

        return view('pages/adminContListe', compact(['contByPdc', 'pdcUnique']));
    }

  

    public function adminpc(){ 
        $pdc = PointDeCollecte::all();
        return view('pages/adminPc')->with('point_de_collectes',$pdc);
    }

    public function adminPcEdit(){
        
        return view('pages/adminPcEdit');
    }

    public function adminPcListe(){
        $pdc = PointDeCollecte::all();
        return view('pages/adminPcListe')->with('point_de_collectes',$pdc);
    }


    public function gestionRapport($id){
        $leves = PointDeCollecte::find($id)->Leves()->get();
        //dd($leves); 
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pages/gestionRapport', compact (['leves'])));
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream('demo.pdf');
 
        return view('pages/gestionRapport', compact (['leves']));
    }


    public function leves($id)
    {
        $saveLast = ConteneurTri::find($id)->saveLastLevee($id);
        return redirect ('/accueil');
    }



  

}
