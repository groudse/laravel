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

<a href="{{ route('admincont_path') }}"><button type="button">  admin cont</button></a></br>
<a href="{{ route('admincont-edit_path') }}"><button type="button"> admin cont edit</button></a></br>
<a href="{{ route('admincont-liste_path') }}"><button type="button"> admin cont liste</button></a></br>

<a href="{{ route('rapport_path') }}"><button type="button"> page rapport</button></a></br>



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

@auth

// The user is login...

@endauth


@guest

// The user is not login...

@endguest


</body>
</html>





