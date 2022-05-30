@extends ('layouts.default')
@section('content')



<meta http-equiv="refresh" content="1800">





<table class="table">
    <thead>
    <tr>
        <th colspan="7">Point de collecte</th>
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
   
@foreach ( $pdcUnique as $pdc )
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






<table class="table">
<thead>
    <tr>
        <th colspan="8">Conteneurs associés</th>
    </tr>
    <tr>
        <th>Nom</th>
        <th>Type de tri</th>
        <th>Remplissage</th>
        <th>Batterie</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Supprimer</th>
        <th>Statut</th>
        
    </tr>
</thead>

<tbody>

@foreach($contByPdc as $cont)

@foreach($cont->historiqueconteneurtris as $lev)

<tr>
<td>{!! $cont->nom_conteneur !!}</td>
        <td>{!! $cont->type_tri !!}</td>


    
   
       

        <td>{{$lev->remplissage}}</td>
        <td>{{$lev->batterie}}</td>


        <td>{!! $cont->latitude !!}</td>
        <td>{!! $cont->longitude !!}</td>
        
        <td><a  href="{!! route('DeleteConteneur_path', 
            ['id' => $cont->id]) !!}" role="button"> 
                Supprimer</a>
        </td> 
            

        <?php 
            if(($lev->remplissage >= 70) or ($lev->batterie <= 30)){
                ?>
                <td bgcolor="#F00C0C"></td>

           <?php }elseif(($lev->remplissage >= 50) or ($lev->batterie <= 50)){
                ?>
                <td bgcolor="#FF9E00"></td>

                <?php }else{
                    ?>
                <td bgcolor="#0EC80E"></td>    
            <?php }?>


        

                </tr>
    
       
          
                    @endforeach
                    @endforeach

    </tbody>
</table> 

<a href="{{ route('adminpc_path') }}" role=button>Retourner sur la liste des points de collectes</a>


<br><br><br><br><br>
<table>
    <thead>
    <tr>
        <th colspan="7">Historique des levées</th>
    </tr>
    <tr>
        <th>Nom</th>
        <th>Remplissage</th>
        <th>Date</th>
        
    </tr>

    </thead>



@foreach($contByPdc as $cont)
@foreach($cont->leves as $lev)

 
    
       
    
         <?php
       $tot =  $cont->leves;
          
      if (sizeof($tot)==1){
            ?> 
                   
                    <tr>
                     <td>{{$cont->nom_conteneur}} </td>
                     <td>{{ $lev->remplissage }}</td>
                     <td>{{ $lev->date }}</td>
                     </tr>
                    
    
                    <?php }else{?> 
               
              
                    <?php } ?>
                    

                    
                    @endforeach
                    @endforeach



    </tbody>


   
</table>

@stop