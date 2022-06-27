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
                                <a href="#campi-plus" class="btn btn-neon mt-3">Invia</a>

                                
                                <h5 class="my-text-color pt-4">I campi contrassegnati da (*) sono obbligatori</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id='campi-plus' style="height: 100vh" class="login-data d-flex justify-content-center align-items-center">
            <div class="col-5">
                <div class="form-group">
                    <label for="cv" class="text-white">cv</label>
                    <input type="text" class="form-control" id="cv" name="cv" placeholder="Enter cv">
                </div>
                <div class="form-group">
                    <label for="locality" class="text-white">locality</label>
                    <input type="text" class="form-control" id="locality" name="locality" placeholder="Enter locality">
                </div>
                <div class="form-group">
                    <label for="phone" class="text-white">phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                </div>
                <button type="submit" class="btn btn-neon mt-3">Invia</button>
            </div>
        </section>
       
            
    </div>
</form>

        

    
@endsection
