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



<h1>Admin pc edit</h1>




<form action=" " method="POST">
@csrf
<input type="text" name="nom_point_collecte" placeholder="nom du point de collecte" required><br>
<input type="text" name="adresse" placeholder="adresse du point de collecte" required><br>
<input type="text" name="ville" placeholder="ville" required><br>

<input type="float"  name="latitude" placeholder="latitude" required><br>
<input type="float"  name="longitude" placeholder="longitude" required><br>
<input type="text" name="code_postal" placeholder="code postal" required><br>

<a href="{{ route('BackControllerSavePc_path') }}"><button formtarget="_self" type="post" > Enregistrer</button></a>
</form>
    
</body>
</html>


