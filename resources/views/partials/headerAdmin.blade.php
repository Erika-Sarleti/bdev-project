<header>
    <nav class="navbar navbar-expand-lg nav-sticky">
        <div class="container-fluid">
          <a class="navbar-brand my-text-color d-flex align-items-center" href="{{ route('guest.home')}}">
            <i class="fa-brands fa-connectdevelop fs-1"></i>
            <span>DEV</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse no-growth" id="navbarNav">
            <ul class="navbar-nav">
              @auth
                <a class="navbar-brand my-text-color" href="{{route('admin.devs.edit',  Auth::user()->id )}}">Modifica il profilo</a>
            
                <li class="nav-item dropdown my-text-color">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle my-text-color" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
            
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            
                        </a>
            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @else
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