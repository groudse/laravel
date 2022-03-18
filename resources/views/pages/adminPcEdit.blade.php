<h1>Admin pc edit</h1>

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


<form action=" " method="POST">
@csrf
<input type="text" name="nom_point_collecte" placeholder="nom du point de collecte" required><br>
<input type="text" name="adresse" placeholder="adresse du point de collecte" required><br>
<input type="text" name="ville" placeholder="ville" required><br>

<input type="number" step="0.01" name="latitude" placeholder="latitude" required><br>
<input type="number" step="0.01" name="longitude" placeholder="longitude" required><br>
<input type="text" name="code_postal" placeholder="code postal" required><br>

<select  name="conteneur_tris">
   @foreach ($conteneurs ?? '' as $conteneur)
    <option value="{!! $conteneur->nom_conteneur !!}">{!! $conteneur->nom_conteneur !!}</option>
    @endforeach
  </select><br>
  











<a href="{{ route('BackControllerSavePc_path') }}"><button formtarget="_self" type="post" > Ajouter</button></a>
</form>