<nav class="navbar navbar-expand-lg navbar-dark navbar-unej">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://res.cloudinary.com/dj6pc5c0o/image/upload/v1746626538/dcpo8s3ah0pgxhanixew.png" 
                 height="20" alt="Logo FASILKOM">
        </a>
        
        {{-- Check if current route is login, hide menu if true --}}
        @if(Route::currentRouteName() != 'login')
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <i class="fas fa-home me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'pengelolaan' ? 'active' : '' }}" href="{{ route('pengelolaan') }}">
                        <i class="fas fa-list-alt me-1"></i> Aspirasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
                        <i class="fas fa-user me-1"></i> Profil
                    </a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>
