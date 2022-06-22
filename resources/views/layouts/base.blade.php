<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js')}}" defer></script>
<body>
    {{-- <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse no-growth" id="navbarNav">
                <ul class="navbar-nav">
                  @auth
                    <a class="navbar-brand" href="{{route('admin.devs.edit',  Auth::user()->id )}}">Modifica il profilo</a>

                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('admin.devs.index')}}">Esplora</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Ciao {{ Auth::user()->name }}</a>
                    </li>
                    @else
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('guest.index')}}">Esplora</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif

                  @endauth


                  <li class="nav-item">
                    <a class="nav-link" href="#">Help </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header> --}}
    @include('partials.header')
    @yield('pageMain')
    @include('partials.footer')
</body>
</html>
