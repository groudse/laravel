<!DOCTYPE html>
<html>

<head>

</head>

<body>
<h1>Admin cont edi</h1>
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
<input type="text" name="nom_conteneur" placeholder="nom conteneur" required><br>
<select  name="type_tri">
    <option value="noir">noir</option>
    <option value="bleu">bleu</option>
	<option value="jaune">jaune</option>
  </select><br>
<input type="number" step="0.01" name="latitude" placeholder="latitude" required><br>
<input type="number" step="0.01" name="longitude" placeholder="longitude" required><br>
<input type="number" name="hauteur" placeholder="hauteur" required><br>
<input type="text" name="adresse_modem" placeholder="adresse du modem" required><br>
<input type="text" name="point_de_collecte_id" placeholder="p du modem" required><br>

{{--{{ Form::open(array('url' => 'foo/bar')) }}
@csrf
<div class="input-group-prepend">
            {!! Form::label('', 'nom ptc', ['class' => 'control-label col-sm-2']) !!}
            {!! Form::select(' point_de_collectes', \App\PointDeCollecte::All()->pluck('id', 'nom_point_collecte'), null, ['class' => 'form-control col-sm-4', 'placeholder' => 'Choix device...'] ) !!}
    </div>
    {!! Form::close() !!}
-->--}}




<a href="{{ route('BackControllerSaveCont_path') }}"><button formtarget="_self" type="post" > Ajouter</button></a>
</form>
</body>
</html>