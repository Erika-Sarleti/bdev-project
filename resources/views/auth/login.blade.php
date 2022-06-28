<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <section class="login-section d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-md-12 d-flex flex-column">
                <div class="my-text-color text-center fs-2">{{ __('Login') }}</div>
                <div class="card-body" style="width: 800px">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row d-flex align-items-center">
                            <label for="email"
                                class="my-text-color col-md-4 col-form-label text-md-right fs-4">{{ __('E-Mail Address:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="rounded-pill form-control
                                        @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center">
                            <label for="password"
                                class="my-text-color col-md-4 col-form-label text-md-right fs-4">{{ __('Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="rounded-pill form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check my-text-color">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-center mt-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-neon">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
