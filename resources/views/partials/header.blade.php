<header>
    <nav class="navbar navbar-expand-lg nav-sticky">
        <div class="container-fluid">
          <a class="navbar-brand my-text-color d-flex align-items-center" href="{{ route('guest.index')}}">
            <i class="fa-brands fa-connectdevelop fs-1"></i>
            <span>dev</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse no-growth" id="navbarNav">
            <ul class="navbar-nav">
              @auth
                <a class="navbar-brand my-text-color" href="{{route('admin.devs.edit',  Auth::user()->id )}}">Modifica il profilo</a>
                
                <li class="nav-item">
                  <a class="nav-link active my-text-color" aria-current="page" href="{{route('admin.devs.index')}}">Esplora</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link my-text-color" href="#"> Ciao {{ Auth::user()->name }}</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link active my-text-color" aria-current="page" href="{{route('guest.index')}}">Esplora</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link my-text-color" href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link my-text-color" href="{{ route('register') }}">Register</a>
                </li>
                @endif
                
              @endauth
              
              
              <li class="nav-item">
                <a class="nav-link my-text-color" href="#">Help </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>