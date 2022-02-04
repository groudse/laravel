<link rel="stylesheet" href="<?php echo asset('css/web.css')?>" type="text/css"> 

<h1>PAGE LISTE</h1>
@auth  <p>The user is authenticated... </p>    @endauth
@guest <p>The user is not authenticated...</p> @endguest
<a href="{{ route('accueil_path') }}"> page gestion</a>

<table>
<thead>
    <tr>
        <th colspan="6">Conteneur 1</th>
    </tr>
    <tr>
        <th>Nom</th>
        <th>Type de tri</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Hauteur en cm</th>
        <th>Adresse modem</th>
    </tr>
</thead>
<tbody>
    @foreach ($conteneurs as $conteneur)
    <tr>
        <td>{!! $conteneur->nom_conteneur !!}</td>
        <td>{!! $conteneur->type_tri !!}</td>
        <td>{!! $conteneur->latitude !!}</td>
        <td>{!! $conteneur->longitude !!}</td>
        <td>{!! $conteneur->hauteur !!}</td>
        <td>{!! $conteneur->adresse_modem !!}</td>
 
        
    </tr>
    @endforeach
</tbody>
</table> 
 