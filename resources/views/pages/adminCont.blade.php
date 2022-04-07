<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Livewire : Sélection Pays et Ville</title>
        <!-- Styles livewire -->
        @livewireStyles()
    </head>
    <body>
    <a href="{{ route('accueil_path') }}"><button type="button"> page accueil</button></a></br>
<a href="{{ route('adminpc_path') }}"><button type="button"> page admin pc</button></a></br>
<a href="{{ route('adminpc-edit_path') }}"><button type="button"> admin pc edit</button></a></br>
<a href="{{ route('adminpc-liste_path') }}"><button type="button"> admin pc liste</button></a></br>
<a href="{{ route('admincont_path') }}"><button type="button">  admin cont</button></a></br>
<a href="{{ route('admincont-edit_path') }}"><button type="button"> admin cont edit</button></a></br>
<a href="{{ route('admincont-liste_path') }}"><button type="button"> admin cont liste</button></a></br>
<a href="{{ route('gestion-liste_path') }}"><button type="button"> gestion liste</button></a></br>
<a href="{{ route('rapport_path') }}"><button type="button"> page rapport</button></a></br>
<a href="{{ route('rapport-edit_path') }}"><button type="button"> page rapport edit</button></a></br>
       






<link rel="stylesheet" href="<?php echo asset('css/web.css')?>" type="text/css"> 

<h1>PAGE LISTE</h1>
@auth  <p>The user is authenticated... </p>    @endauth
@guest <p>The user is not authenticated...</p> @endguest
 <!-- Le composant app/Http/Livewire/CountriesCitiesSelect.php -->
 @livewire("conteneur-select")

<!-- Scripts livewire -->
@livewireScripts()
{{--<select class="form-control" name="product_id">

    <option>Select Item</option>

    @foreach ($items as $key => $value)

        <option value="{{ $key }}" {{ ( $key == 1) ? 'selected' : '' }}> 

            {{ $value }} 

        </option>
        <?php echo $value ?>
    @endforeach

</select>--}}



<table>
<thead>
    <tr>
        <th colspan="9">Conteneur 1</th>
    </tr>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Type de tri</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Hauteur en cm</th>
        <th>Adresse modem</th>
        <th>Point de collecte</th>
        <th>Supprimer</th>
    </tr>
</thead>
<tbody>
    
   @foreach ($conteneurs as $conteneur)
    
   @foreach ($conteneur->pointdecollectes as $pdc)
    <tr>
    <td>{!! $conteneur->id !!}</td>
    <td>{!! $conteneur->nom_conteneur !!}</td>
    <td>{!! $conteneur->type_tri !!}</td>
    <td>{!! $conteneur->latitude  !!}</td>
    <td>{!! $conteneur->longitude  !!}</td>
    <td>{!! $conteneur->hauteur  !!}</td>
    <td>{!! $conteneur->adresse_modem  !!}</td>
   
        
            
    <td>{{ $pdc->nom_point_collecte }}</td>
       
 
     
       
        <td><a href="{!! route('DeleteControllerDeleteConteneur_path', ['id' => $conteneur->id]) !!}"><button type="button"> Supprimer</button></a></td> 
        
    </tr>
          
            @endforeach
            @endforeach







</tbody>
</table>





    </body>
</html>




