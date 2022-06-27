@extends('layouts.app')
@extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')
<form action="{{ route('register') }}" method="POST" class="mt-3"  id="form-message">
        @csrf
    <div class="sign-in">
        <section class="register d-flex flex-column justify-content-center align-items-center">
            <div class="row pt-5">
                <h1 class="my-text-color mb-3">
                    Scegli la tua specializzazione
                </h1>
            </div>
            <div class=" pt-5">
                <select name="role" id="role">
                <option value="Front-End Developer">Front-End Developer</option>
                <option value="Back-End Developer">Back-End Developer</option>
                <option value="Data Analyst">Data Analyst</option>


            </select>
            </div>
            <a href="#name-register" class="btn btn-neon mt-3">Invia</a>
        </section>

        <section id='name-register' style="height: 100vh" class="name-data d-flex justify-content-center">
            {{-- FIXME: sistemare align-items-center --}}
            <div class="row pt-5 d-flex justify-content-center align-items-center input-box ">
                <div class="d-flex flex-column text-center">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="my-text-color mb-3">
                                Come vuoi farti chiamare?
                            </h1>
                        </div>
                    </div>
                    {{-- FIXME: sistemare padding nome e cognome  --}}
                    <div class="row">
                        <div class="col">
                            
                                
                            <div class="row my-input-group my-3">
                                <div class="d-flex input-group mb-3 align-items-center ">
                                    <span class="my-text-color" id="basic-addon1">Nome*:</span>
                                    <input type="text" class="form-control  flex-grow-1" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="d-flex input-group align-items-center my-3">
                                    <span class="my-text-color" id="basic-addon1">Cognome*:</span>
                                    <input type="text" class="form-control  flex-grow-1" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <a href="#campi-register" class="btn btn-neon mt-3">Invia</a>
                            <h5 class="my-text-color pt-4">I campi contrassegnati da (*) sono obbligatori</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id='campi-register' style="height: 100vh" class="login-data d-flex justify-content-center align-items-center">
             {{-- FIXME: sistemare align-items-center --}}
            <div class="row pt-5 d-flex justify-content-center input-box ">
                <div class="d-flex flex-column text-center">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="my-text-color mb-3">
                                Inserisci i tuoi dati d'ingresso
                            </h1>
                        </div>
                    </div>
                    {{-- FIXME: sistemare padding nome e cognome  --}}
                    <div class="row">
                        <div class="col">
                            
                                <div class="row my-input-group">
                                    <div class="d-flex input-group mb-3 align-items-center my-3">
                                        <span class="my-text-color" id="basic-addon1">Email*:</span>
                                        <input type="text" class="form-control  flex-grow-1" placeholder="Username"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="d-flex input-group mb-3 align-items-center my-3">
                                        <span class="my-text-color" id="basic-addon1">Password*:</span>
                                        <input type="password" class="form-control  flex-grow-1" placeholder="Username"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="d-flex input-group mb-3 align-items-center my-3">
                                        <span class="my-text-color" id="basic-addon1">Conferma password*:</span>
                                        <input type="password" class="form-control  flex-grow-1" placeholder="Username"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-neon mt-3">Invia</button>
                                <h5 class="my-text-color pt-4">I campi contrassegnati da (*) sono obbligatori</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
</form>
        <section id='completed' style="height: 100vh" class="confirm-registration d-flex justify-content-center align-items-center">
            <div class="row pt-5">
                <div class="col-6 mt-5">
                    <span>&check;</span>
                    <h1>Registrazione completata</h1>
                </div>
            </div>
        </section>
        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

        {{-- <div class="form-group row">
            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                    name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}

        {{-- <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}

        {{-- <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}

        {{-- <div class="form-group row">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div> --}}



        {{-- <h1>CAMPI PLUS</h1> --}}

        {{-- <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

        {{-- <div class="form-group row">
            <label for="cv" class="col-md-4 col-form-label text-md-right">{{ __('Cv') }}</label>

            <div class="col-md-6">
                <input id="cv" type="text" class="form-control @error('cv') is-invalid @enderror" name="cv"
                    value="{{ old('cv') }}" required autocomplete="cv" autofocus>

                @error('cv')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}

        {{-- <div class="form-group row">
            <label for="locality" class="col-md-4 col-form-label text-md-right">{{ __('Locality') }}</label>

            <div class="col-md-6">
                <input id="locality" type="text" class="form-control @error('locality') is-invalid @enderror"
                    name="locality" value="{{ old('locality') }}" required autocomplete="locality" autofocus>

                @error('locality')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}

        {{-- <div class="form-group row">
            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

            <div class="col-md-6">
                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role"
                    value="{{ old('role') }}" required autocomplete="role" autofocus>

                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}

        {{-- <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                    name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div> --}}

        {{-- <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    {{-- </div> --}}
    </div>
@endsection
