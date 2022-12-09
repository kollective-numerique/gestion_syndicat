<nav class="navbar navbar-light" style="background-color: #F9434E;">
    <a class="navbar-brand" href="{{ route('agents.dashboard') }}">
        <img src="/img/logo.png" width="50" height="50" alt="">
    </a>
    <ul class="nav justify-content-end">
        @if ($agent->fonction == 'pds')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('agents.syndicat') }}">Liste des membres de ma base syndicale </a>
            </li>
        @endif

        @if ($agent->fonction == 'pdf')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('agents.federation') }}">Liste des membres de ma féderation</a>
            </li>
        @endif

        @if ($agent->fonction == 'drh')
            {{-- dir ressource humaine --}}
            <li class="nav-item"><a class="nav-link" href="{{ route('agents.employe') }}">Voir la liste d'employés</a>
            </li>
        @endif
        <li class="nav-item"><a class="nav-link" href="{{ route('agents.password') }}">Modifier mon mot de passe</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('agents.logout') }}">Déconnexion</a></li>
    </ul>
</nav>
