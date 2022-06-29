<header class>
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
                
            
                <li class="nav-item dropdown text-white">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item my-text-color-pink" href="{{route('admin.devs.show',  Auth::user()->id )}}">
                        Vai al tuo profilo
                    </a>
                      <a class="dropdown-item my-text-color-pink" href="{{route('admin.devs.edit',  Auth::user()->id )}}">
                          Modifica Profilo
                      </a>
                      <a class="dropdown-item my-text-color-pink" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            
                        </a>
                    </div>
                    
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                        
            
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
                <li class="nav-item">
                  <a class="nav-link active my-text-color" aria-current="page" href="{{route('guest.index')}}">Esplora</a>
                </li>
                @endif
                
              @endauth
              
              
              <li class="nav-item">
                <a class="navbar-brand my-text-color d-flex align-items-center" href="{{ route('guest.index')}}">
                  <span>Esplora</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>