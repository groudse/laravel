<div>
    <!-- L'état de chargement de données -->
    <p wire:loading >Chargement de données ...</p>

    <!-- Les pays -->
    <p>
        <label for="pdc_id" >Sélectionnez un pays</label>
        
        <!-- Data Binding : <select> avec la propriété $country_id -->
        <select id="pdc_id" wire:model="pdc_id" >

            <option value="" >Séléctionner un pays</option>

            <!-- On parcourt la collection de pays pour afficher chaque pays -->
            @foreach ($countries as $country)
            <option value="{{ $country->id }}" >{{ $country->nom_point_collecte }}</option>
            
            @endforeach
            
        </select>
    </p>

    <!-- On vérifie si la collection de villes contient des éléments -->
    
    <p>
    <h1>{{!! $country->id; !!}}</h1>
        <label for="cont_id" >Sélectionnez une ville</label>

        <!-- Data Binding : <select> avec la propriété $city_id -->
        <select id="cont_id" wire:model="cont_id" >

            <option value="" >Sélectionnez une ville</option>

            <!-- On parcourt la collection de villes pour afficher chaque ville -->
            @foreach ($conts as $city)
            @foreach ($city->pointdecollectes as $pdc )
            <option value="{{ $pdc->id }}" >{!! $pdc->id !!}</option>
            @endforeach
            @endforeach
           

        </select>
    </p>
   
</div>