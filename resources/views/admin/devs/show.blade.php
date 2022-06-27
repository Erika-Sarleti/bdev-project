@extends('layouts.base')
@section('pageMain')

{{-- BARRA LATERALE DI NAVIGAZIONE --}}
<main class="d-flex container-bg mtplus">

    <aside class="section-aside">
        <ul>
            <li>
                <a href="#" class="btn-neon">
                    il mio profilo
                </a>
            </li>
            <li>
                <a href="#"  class="btn-neon">
                    chat
                </a>
            </li>
            <li>
                <a href="#"  class="btn-neon">
                    reviews
                </a>
            </li>
            <li>
                <a href="#"  class="btn-neon">
                    statics
                </a>
            </li>
            <li>
                <a href="#"  class="btn-neon">
                    ciccioPlus
                </a>
            </li>
        </ul>
    </aside>
    
    <section class="section-main">
    
        <h2 class="my-text-color my-4">MODIFICA LE TUE INFORMAZIONI PERSONALI:</h2>
        
        <div class="container mb-5">
            <div class="row">
                <div class="col">

                  <div class="card" style="width: 18rem;">
                    <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$dev->name}}</h5>
                      <p class="card-text">{{$dev->description}}</p>
                      {{-- TODO: il link deve reindirizzare al form per inviare il messaggio, CREDO serva un  --}}
                      {{-- <a href="{{route('admin.devs.edit', $dev->id)}}" class="btn btn-primary">Invia un messaggio</a> --}}
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Messaggi</h5>
                          <p class="card-text">
                            @foreach ($dev->messages as $message)
                              <p>{{$message->message}}</p>
                            @endforeach
                          </p>
                          
                    </div>
                </div>


                <a class="navbar-brand my-text-color mt-5" href="{{route('admin.devs.edit',  Auth::user()->id )}}">Modifica il profilo</a>


            </div>
                  </div>
                </div>
            </div>
        </div>
              </section>
            </main>
            @endsection





















                     {{-- <form method="POST" action="{{ route('admin.devs.update', $dev->id ) }}" enctype="multipart/form-data">
        
                        @csrf
                        @method('PUT')
        
                
        
                        <div class="mb-3">
                          <label for="name" class="form-label fw-bold my-text-color">Nome</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ $dev->name }}" {{ old('name', $dev->name) }}>
                        </div>
                        @error('name')
                            <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        <div class="mb-3">
                            <label for="surname" class="form-label fw-bold my-text-color">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" value="{{ $dev->surname }}" {{ old('surname', $dev->surname) }}>
                        </div>
                        @error('surname')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold my-text-color">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $dev->email }}" {{ old('email', $dev->email) }}>
                        </div>
                        @error('Email')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold my-text-color">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        @error('password')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
        
                        <button type="submit" class="btn-neon mt-5 fw-bold">SUBMIT</button>
        
                    </form> --}}
