@extends ('layouts.default')
@section('content')



<h1>Ajouter un point de collecte</h1>




<form action=" " method="POST">
@csrf
<input type="text" name="nom_point_collecte" placeholder="Nom" required><br>
<input type="text" name="adresse" placeholder="Adresse" required><br>
<input type="text" name="ville" placeholder="Ville" required><br>

<input type="float"  name="latitude" placeholder="Latitude" required><br>
<input type="float"  name="longitude" placeholder="Longitude" required><br>
<input type="text" name="code_postal" placeholder="Code postal" required><br><br>

<a href="{{ route('BackControllerSavePc_path') }}" ><button class="btn btn-info" formtarget="_self" type="post" > Enregistrer</button></a>
</form>
    
</body>
</html>
@stop
