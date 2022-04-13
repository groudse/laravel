<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles()
</head>
<body>

<h1>Admin cont liste</h1>

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

<table>
    <thead>
    <tr>
        <th colspan="7">Lorem ipsum</th>
    </tr>
    <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>ville</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Code postal</th>
        
    </tr>

    </thead>


    <tbody>
   
@foreach ( $pdcUnique ?? '' as $pdc )
    <tr>



   
      <td>{{ $pdc->nom_point_collecte }}</td>
      

    <td>{{ $pdc->adresse }}
    <td>{{ $pdc->ville }}</td>
    <td>{{ $pdc->latitude }}</td>
    <td>{{ $pdc->longitude }}</td>
    <td>{{ $pdc->code_postal }}</td>
  
 



                </tr>
                @endforeach


    </tbody>


   
</table>






<table>
<thead>
    <tr>
        <th colspan="7">Lorem ipsum</th>
    </tr>
    <tr>
        <th>Nom</th>
        <th>Type de tri</th>
        <th>Remplissage</th>
        <th>Batterie</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Supprimer</th>
        
    </tr>
</thead>

<tbody>
@foreach($contByPdc as $cont)

    <tr>

    <td>{!! $cont->nom_conteneur !!}</td>
        <td>{!! $cont->type_tri !!}</td>
      
        <td>{!! $cont->latitude !!}</td>
        <td>{!! $cont->longitude !!}</td>
        
        <td><a  href="{!! route('DeleteConteneur_path', 
            ['id' => $cont->id]) !!}"><button type="button"> 
                Supprimer</button></a>
        </td> 
    

                </tr>
   
    @endforeach

    </tbody>
</table> 

<a href="{{ route('adminpc_path') }}"><button>Retourner sur la liste des points de collectes</button></a>


</body>
</html>

