

<h1>PAGE ACCUEIL</h1>
<h2>Infos leves</h2>
<ul>
   
    <li>date : {!! $leves->date !!}</li>
    <li>remplissage : {!! $leves->remplissage !!}</li>
</ul>

<a href="{{ route('adminpc_path') }}"><button type="button"> page admin pc</button></a></br>
<a href="{{ route('admincont_path') }}"><button type="button"> page admin cont</button></a></br>
<a href="{{ route('leve_path') }}"><button type="button"> page leve</button></a></br>
<a href="{{ route('rapport_path') }}"><button type="button"> page rapport</button></a></br>
<a href="{{ route('pointcollec_path') }}"><button type="button"> page point collecte</button></a></br>


