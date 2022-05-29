@extends ('layouts.default')
@section('content')


<h1>Admin cont edi</h1>
<form action=" " method="POST">
  @csrf
<input type="text" name="nom_conteneur" placeholder="Nom" required><br>
<select  name="type_tri">
    <option value="Noir">noir</option>
    <option value="Bleu">bleu</option>
	<option value="Jaune">jaune</option>
  </select><br>
<input type="number" name="hauteur" placeholder="Hauteur en cm" required><br>
<input type="text" name="adresse_modem" placeholder="Adresse du modem" required><br>
<a href="{{ route('BackControllerSaveCont_path') }}"><button formtarget="_self" type="post" > Ajouter</button></a>



</form>




</body>
</html>


@stop


