<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mb-0 h1" href="{{ route('page.home') }}">benfica.live</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('countries.index') }}">Spots</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contacts.show') }}">Contactos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page.about') }}">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger-white-border" href="{{ route('spots.create') }}">Submeter um Spot</a>
            </li>
        </ul>
    </div>
</nav>
