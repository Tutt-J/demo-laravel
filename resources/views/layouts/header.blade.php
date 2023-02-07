<header class="header header--transparent container-fluid position-fixed">
    <nav class="navbar header__nav nav navbar-expand-lg">
        <div class="container d-flex flex-row justify-content-between align-items-center">
            <a href="{{ route('home') }}">
                <img class="header__logo header__logo--visible d-none" src="{{ asset('storage/img/logo_bleu.png') }}"
                    alt="Le mot digistos en dessous d'un maillage">
                <img class="header__logo header__logo--transparent" src="{{ asset('storage/img/logo_blanc.png') }}"
                    alt="Le mot digistos en dessous d'un maillage">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav__item nav-item"><a class="nav__link nav__link--active"
                            href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav__item nav-item"><a class="nav__link" href="#">Portfolio</a></li>
                    <li class="nav__item nav-item"><a class="nav__link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
