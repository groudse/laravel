<?php

namespace App\Http\Livewire;
use App\ConteneurTri;
use App\PointDeCollecte;

use Livewire\Component;

namespace App\Http\Livewire;



class ConteneurSelect extends Component
{
    /*public $pdc_id; // L'identifiant du pays country
    public $cont_id; // L'identifiant de la ville city
    public $conts; // la collection de villes cities

    public function mount() {
        // On affecte une collection vide 
        $this->conts = collect();
    }

    // Quand $country_id change, on charge les $cities de $country_id 
    public function updatePdcId ($newValue) {
        $this->conts = ConteneurTri::where("point_de_collectes", $newValue)->orderBy("conteneur_tri_point_de_collectes")->get();
        //PointDeCollecte::with('pointdecollectes')->get();
        //
    }

    public function render()
    {
        // On récupère les pays
        $countries = PointDeCollecte::select("id", "nom_point_collecte")->get();

        // On retourne la vue avec les pays
        return view('livewire.conteneur-select', [
            'countries' => $countries
        ]);
    }*/


    public $cerated_sections;

    protected $listeners = ['refreshComponent' => '$refresh']; /*Note: activating the refresh*/

    public function mount(){
        $this->cerated_sections = PointDeCollecte::all();
    }

    public function render()
    {
        return view('livewire.conteneur-select');
    }



}
