
    <a href="{{ route('accueil_path') }}"><button type="button"> page accueil</button></a></br>
<a href="{{ route('adminpc_path') }}"><button type="button"> page admin pc</button></a></br>
<a href="{{ route('adminpc-edit_path') }}"><button type="button"> admin pc edit</button></a></br>

<a href="{{ route('admincont_path') }}"><button type="button">  admin cont</button></a></br>
<a href="{{ route('admincont-edit_path') }}"><button type="button"> admin cont edit</button></a></br>
<a href="{{ route('admincont-liste_path') }}"><button type="button"> admin cont liste</button></a></br>

<a href="{{ route('rapport_path') }}"><button type="button"> page rapport</button></a></br>
 








<h1>PAGE LISTE</h1>





<table>
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








