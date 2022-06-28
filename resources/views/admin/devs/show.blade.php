@extends('layouts.admin')
@section('pageTitle', 'ShowPage')
@section('pageMain')

{{-- BARRA LATERALE DI NAVIGAZIONE --}}
<main class="d-flex bg-dashboard mtplus">
  @include('partials.sidebar');


    
    
    <section class="section-main section-show-dev container-blur-sidebar">
        
        <div class="container mb-5">
            <div class="row">
                <div class="col">
                  <h1 class="my-text-color ms-4 mb-5">Il mio profilo</h1>

                  

                  <div class="card-show-dev mt-5"  style="width: 40rem;" style="background-color: rgb(88, 88, 112)" >
                    <hr style="color: rgb(255, 255, 255)">
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





