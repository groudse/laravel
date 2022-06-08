<table border='1' width='100%' style='border-collapse: collapse;'>


<thead>
<tr>
   <th>Type tri</th>
   <th>Moyenne de remplissage</th>
</tr>
</thead>

<?php 

   $moyenne = 0;
   $count = 0;
   $final = 0;
   ?>
 <tbody>
    @foreach($levs as $lev)

    <?php 
      $moyenne +=$lev->remplissage;

      
      $count += 1;

?>


$final = $moyenne/$count;


 <tr>
      <td>try</td>
      <td>{{$lev->remplissage}}</td>
</tr>    


@endforeach
</tbody>



</table>




