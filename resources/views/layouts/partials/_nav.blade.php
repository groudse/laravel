<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('accueil_path') }}">Accueil</a>
            </li>
            
            @auth
                @if (Auth::user()->hasRole('admin') or Auth::user()->hasRole('technicien') )
                
                    
                        <li class="menu-deroulant">
                            <a class="nav-link" href="#">Gestion</a>
                            <ul class="sous-menu">
                                <li><a href="{{ route('adminpc_path') }}">Liste</a></li>
                                
                            </ul>
                        </li>
                    
                        <li class="menu-deroulant">
                            <a class="nav-link" href="#">Ajouter</a>
                            <ul class="sous-menu">
                                <li><a href="{{ route('adminpc-edit_path') }}">Point de collecte</a></li>
                                <li><a href="{{ route('admincont-edit_path') }}">Conteneur</a></li>
                            </ul>
                        </li>
                @endif
            @endauth

            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        @auth
        
        <li class="nav-item"><a class="nav-link" href="{{ route('voyager.dashboard') }}"role="button">Se déconnecter</a></li>

       
           

        @endauth    
        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('voyager.dashboard') }}"role="button">Se connecter</a></li>
           
        @endguest
        </ul>
    </div>
</nav>
