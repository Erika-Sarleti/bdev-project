@extends('layouts.admin')
@section('pageMain')

{{-- BARRA LATERALE DI NAVIGAZIONE --}}
<main class="d-flex container-bg mtplus">

    @include('partials.sidebar');
    
    <section class="section-main section-show-dev">
        
        <div class="container mb-5">
            <div class="row">
                <div class="col">

                  <div class="card-show-dev"  style="width: 40rem;" style="background-color: rgb(88, 88, 112)" >
                    <div class="d-flex">
                      <div>
                        <img src="{{ $dev->userinfo->image }}" class="card-img-top" style="width: 20rem;" alt="...">
                      </div>
                        <div class="mt-5 ms-5">
                          <h5 class="card-title"><span>Nome:</span> {{$dev->name}}</h5>
                          <h5 class="card-title"><span>Cognome:</span> {{$dev->surname}}</h5>
                        </div>
                    </div>

                    <hr style="color: rgb(255, 255, 255)" class="fs-4">
                    
   
                    
                    <div class="card-body">
                      <span style="margin-top: -8px">Descrizione:</span> <p class="card-text d-flex"> {{$dev->userinfo->description}}</p>
                      <span>Email:</span><p class="card-text"> {{$dev->email}}</p>
                      <span>Cv:</span><p class="card-text"> <a href="">{{$dev->userinfo->cv}}</a> </p>
                      <span>Località:</span><p class="card-text">{{$dev->userinfo->locality}}</p>
                      <span>Github:</span><p class="card-text"> <a href="">{{$dev->userinfo->github}}</a></p>
                      <span>Ruolo:</span><p class="card-text"> {{$dev->userinfo->role}}</p>
                      <span>Telefono:</span><p class="card-text"> {{$dev->userinfo->phone}}</p>

                      <span>Conoscenze:</span>

                      <p class="card-text">
                      @for ($i = 0; $i < count($dev->skills); $i++) 
                         @if ($i == count($dev->skills) - 1) 
                         {{$dev->skills[$i]->name}}.
                         @else {{$dev->skills[$i]->name}}, 
                         @endif
                     @endfor
                    </p>

                    
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
