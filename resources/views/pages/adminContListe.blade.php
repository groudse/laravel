<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles()
</head>
<body>

<h1>Admin cont liste</h1>

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


       <!-- Le composant app/Http/Livewire/CountriesCitiesSelect.php -->
       @livewire("conteneur-select")

<!-- Scripts livewire -->
@livewireScripts()
</body>
</html>
