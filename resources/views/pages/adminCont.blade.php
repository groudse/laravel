@extends ('layouts.default')
@section('content')





<h1>PAGE LISTE</h1>





<table class="table">
<thead>
    <tr>
        <th colspan="8">Conteneur 1</th>
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

  
    <tr>
    <td>{!! $conteneur->id !!}</td>
    <td>{!! $conteneur->nom_conteneur !!}</td>
    <td>{!! $conteneur->type_tri !!}</td>
    <td>{!! $conteneur->latitude  !!}</td>
    <td>{!! $conteneur->longitude  !!}</td>
    <td>{!! $conteneur->hauteur  !!}</td>
    <td>{!! $conteneur->adresse_modem  !!}</td>
    
        <?php 
        $tot = $conteneur->pointdecollectes; 
        
    
        if (sizeof($tot)==1){
        ?> 
                @foreach($conteneur->pointdecollectes as $pdc)
                 <td>{{$pdc->nom_point_collecte}} </td>
                 <td><a href="{!! route('DeleteConteneur_path', ['id' => $conteneur->id]) !!}"><button type="button"> Supprimer</button></a></td> 
                 @endforeach 
           <?php }else{?> 
           
                <td>Non lié</td>
                <td><a href="{{ route('adminpc_path') }}"><button type="button">Lier</button></a></td>
                <?php } ?>
               
      

   
       
 
     
       
        
        
    </tr>
          
    
            @endforeach





<div id="here">

</tbody>
</table>





@stop


