<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


<h1>Admin pc</h1>
<link rel="stylesheet" href="<?php echo asset('css/web.css')?>" type="text/css"> 

<table>
<thead>
    <tr>
        <th colspan="8">Lorem ipsum</th>
    </tr>
    <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>ville</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Code postal</th>
        <th>Conteneur</th>
        <th>Supprimer</th>
        
    </tr>
</thead>

<tbody>
@foreach ($point_de_collectes as $pdc)
    <tr>
    <td>{!! $pdc->nom_point_collecte !!}</td>
        <td>{!! $pdc->id !!}</td>
        <td>{!! $pdc->ville !!}</td>
        <td>{!! $pdc->latitude !!}</td>
        <td>{!! $pdc->longitude !!}</td>
        <td>{!! $pdc->code_postal !!}</td>

        <td><a href="{!! route('ContByPDC_path', 
            ['id' =>  $pdc->id ]) !!}"><button type="button"> 
                Lien</button></a></td>
               
        <td><a  href="{!! route('DeletePointDeCollecte_path', 
            ['id' => $pdc->id]) !!}"><button type="button"> 
                Supprimer</button></a>
        </td> 
        </tr>
   
    @endforeach

    </tbody>
</table> 
</body>
</html>


