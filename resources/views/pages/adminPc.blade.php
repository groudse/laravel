@extends ('layouts.default')
@section('content')



<?php
/*
   $to_email = "vocsplay@gmail.com";
   $subject = "Simple Email Test via PHP";
   $body = "Hi,\n This is test email send by PHP Script";
   $headers = "From: sender@example.com";
 
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }*/
?>


<table class="table">
<thead>
    <tr>
        <th colspan="9">Points de collectes</th>
    </tr>
    <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>ville</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Code postal</th>
        <th>Informations</th>
        <th>Rapport</th>
        <th>Supprimer</th>
        
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

        <td><a  href="{!! route('ContByPDC_path', 
            ['id' =>  $pdc->id ]) !!}" role="button"> 
                Lien</a></td>

         
               
        <td><a  href="{!! route('rapport_path', 
            ['id' =>  $pdc->id ]) !!}" role="button"> 
                Rapport</a></td>  

        <td><a  href="{!! route('DeletePointDeCollecte_path', 
            ['id' => $pdc->id]) !!}" role="button"> 
                Supprimer</a>
        </td> 

       
        </tr>
   
    @endforeach

    </tbody>
</table> 

<a  class="btn btn-info" href="{{ route('adminpc-edit_path') }}" role="button"> 
                Ajouter</a>
</body>
</html>
@stop

