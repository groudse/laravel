@extends ('layouts.default')
@section('content')

<!-- Open Map Street https://nouvelle-techno.fr/actualites/2018/05/11/pas-a-pas-inserer-une-carte-openstreetmap-sur-votre-site -->

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />



<h1>PAGE ACCUEIL</h1>


<div class="border border-dark">
    <div id="map">
    

        <!-- Ici s'affichera la carte -->
    </div>
</div>


<!-- Fichiers Javascript
https://nouvelle-techno.fr/actualites/2018/05/11/pas-a-pas-inserer-une-carte-openstreetmap-sur-votre-site-->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script type="text/javascript">
    // On initialise la latitude et la longitude du centre de la France
    var lat = 47;
    var lon = 2.349903;
    var macarte = null;
    var zoom =  5;

     var pdc =  {!! json_encode($pdcMap) !!};   
   
    // Fonction d'initialisation de la carte
    function initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte = L.map('map').setView([lat, lon], zoom);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);

        for (var cont in pdc) {
            var marker = L.marker([pdc[cont].lat, pdc[cont].lon]).addTo(macarte);
            marker.bindPopup(cont);
           
         

        }
    }
    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };

</script>


@stop
