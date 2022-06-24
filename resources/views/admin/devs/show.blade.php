@extends('layouts.base')
@section('pageMain')

{{-- BARRA LATERALE DI NAVIGAZIONE --}}
<main class="d-flex container-bg mtplus">

    @include('partials.aside')
    
    <section class="section-main">
    
        <h2 class="my-text-color my-4">  {{ Auth::user()->name }} {{ Auth::user()->surname }}</h2>
        
        <div class="container mb-5">
            <div class="row">
                <div class="col">

                    <div class="container text-light">
                        <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h2>General Info</h2>
                        <p>{{$dev->name}} {{$dev->surname}}</p>
                        <h5>Descrizione</h5>
                        <p class="card-text">{{$dev->userinfo->description}}</p>
                        <h5>Luogo</h5>
                        <p class="card-text">{{$dev->userinfo->locality}}</p>
                        <h5>Ruolo</h5>
                        <p class="card-text">{{$dev->userinfo->role}}</p>
                        
                            <a href="{{$dev->userinfo->github}}" class='btn-neon'>GitHub</h5>
                        

                        
                            <a href="{{$dev->userinfo->cv}}" class='btn-neon'>CV</a> 
                        
                    </div>
                </div>

                <a class="btn-neon mt-5" href="{{route('admin.devs.edit',  Auth::user()->id )}}">Modifica il profilo</a>

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
