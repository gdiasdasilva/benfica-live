<header id="header">
    <nav class="navbar has-shadow {{ Route::currentRouteName() == 'home' ? 'is-homepage' : 'is-danger' }}"
        role="navigation"
        aria-label="main navigation"
        v-bind:class="{'is-active' : mobileMenuOpen}"
    >
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">benfica.<strong>live</strong></a>
            <div class="navbar-burger burger" v-on:click="toggleMobileMenu" v-bind:class="{'is-active' : mobileMenuOpen}">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-menu" v-bind:class="{'is-active' : mobileMenuOpen}">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('home') }}">Início</a>
                <a class="navbar-item" href="{{ route('countries.index') }}">Países</a>
                <a class="navbar-item" href="{{ route('page.about') }}">Sobre nós</a>
                <a class="navbar-item" href="{{ route('contacts.show') }}">Contactos</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="navbar-item button is-danger is-inverted is-outlined" href="{{ route('spots.create') }}">
                        <span class="icon">
                            <i class="fa fa-upload"></i>
                        </span>
                        <span>Sugerir um novo Spot</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
