<h1>gestion rapport</h1>

<a href="{{ route('accueil_path') }}"><button type="button"> page accueil</button></a></br>
<a href="{{ route('adminpc_path') }}"><button type="button"> page admin pc</button></a></br>
<a href="{{ route('adminpc-edit_path') }}"><button type="button"> admin pc edit</button></a></br>

<a href="{{ route('admincont_path') }}"><button type="button">  admin cont</button></a></br>
<a href="{{ route('admincont-edit_path') }}"><button type="button"> admin cont edit</button></a></br>
<a href="{{ route('admincont-liste_path') }}"><button type="button"> admin cont liste</button></a></br>

<a href="{{ route('rapport_path') }}"><button type="button"> page rapport</button></a></br>



     <!-- Le composant app/Http/Livewire/CountriesCitiesSelect.php -->
     @livewire("conteneur-select")

<!-- Scripts livewire -->
@livewireScripts()