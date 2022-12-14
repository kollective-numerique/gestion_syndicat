<nav class="navbar navbar-light" style="background-color: #F9434E;">
    <a class="navbar-brand" href="#">
        <img src="/img/logo.png" width="50" height="50" alt="">
    </a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('accueil') }}">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reglement') }}">Charte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adhesion') }}">Adhésion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('agents.login') }}">Administration</a>
        </li>
    </ul>
</nav>
