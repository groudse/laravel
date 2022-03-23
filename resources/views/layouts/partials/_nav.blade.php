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
                                <li><a href="{{ route('accueil_path') }}">Liste</a></li>
                                <li><a href="{{ route('accueil_path') }}">Rapport</a></li>
                            </ul>
                        </li>
                    
                        <li class="menu-deroulant">
                            <a class="nav-link" href="#">Administration</a>
                            <ul class="sous-menu">
                                <li><a href="{{ route('accueil_path') }}">Point de collecte</a></li>
                                <li><a href="#">Conteneur</a></li>
                            </ul>
                        </li>
                @endif
            @endauth

            <li class="nav-item">
                <a class="nav-link" href="{{ route('accueil_path') }}">Levé</a>

            </li>
        
        @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{!! Auth::user()->name !!} - role :{!! Auth::user()->role->name !!}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('accueil_path') }}">Se déconnecter</a>
 
                </div>
            </li>
        @endauth
        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('voyager.dashboard') }}">Se connecter</a></li>
        @endguest
        </ul>
    </div>
</nav>