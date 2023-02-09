<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}"
                class="nav-link text-white 
            @if (Route::current()->getName() == 'admin.dashboard') active @endif"
                >
                Tableau de bord
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('domains.list') }}" class="nav-link text-white
            @if (Route::current()->getName() == 'domains.list') active @endif"
            ">
                Domaines d'expertise
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('services.list') }}" class="nav-link text-white
            @if (Route::current()->getName() == 'services.list') active @endif"">
                Services
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white">
                Portfolio
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a href="{{ route('logout') }}" class="dropdown-item"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</div>
