@extends('layouts.admin')
@section('pageMain')

{{-- BARRA LATERALE DI NAVIGAZIONE --}}
<main class="d-flex container-bg mtplus">

    @include('partials.sidebar');
    
    <section class="section-main">
        
        <div class="container mb-5">
            <div class="row">
                <div class="col">

                  <div class="card" style="width: 18rem;">
                    <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Nome: {{$dev->name}}</h5>
                      <h5 class="card-title">Cognome: {{$dev->surname}}</h5>
                      <p class="card-text">Descrizione: {{$dev->userinfo->description}}</p>
                      <p class="card-text">Email: {{$dev->email}}</p>
                      <p class="card-text">Cv: {{$dev->userinfo->cv}}</p>
                      <p class="card-text">Immagine: {{$dev->userinfo->image}}</p>
                      <p class="card-text">Località: {{$dev->userinfo->locality}}</p>
                      <p class="card-text">Github: {{$dev->userinfo->github}}</p>
                      <p class="card-text">Ruolo: {{$dev->userinfo->role}}</p>
                      <p class="card-text">Telefono: {{$dev->userinfo->phone}}</p>
                      @foreach ($dev->skills as $skill)
                        <p class="card-text">Conoscenze: {{$skill->name}}</p>
                      @endforeach



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
