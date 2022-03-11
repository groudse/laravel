<h1>Admin pc</h1>
<link rel="stylesheet" href="<?php echo asset('css/web.css')?>" type="text/css"> 

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




<table>
<thead>
    <tr>
        <th colspan="8">Point de collecte 1</th>
    </tr>
    <tr>
        <th>nom_point_collecte</th>
        <th>adresse</th>
        <th>ville</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Code postal</th>
    </tr>
</thead>
<tbody>
@foreach ($point_de_collectes as $pdc)
    <tr>
    <td>{!! $pdc->nom_point_collecte !!}</td>
        <td>{!! $pdc->adresse !!}</td>
        <td>{!! $pdc->ville !!}</td>
        <td>{!! $pdc->latitude !!}</td>
        <td>{!! $pdc->longitude !!}</td>
        <td>{!! $pdc->code_postal !!}</td>
    </tr>
    @endforeach

    </tbody>
</table> 