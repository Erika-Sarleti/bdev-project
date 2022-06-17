@extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')
    <div class="card" style="width: 18rem;">
        <img src="{{$dev->userinfo->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$dev->name}}</h5>
          <p class="card-text">{{$dev->description}}</p>
          {{-- TODO: il link deve reindirizzare al form per inviare il messaggio, CREDO serva un --}}
          <a href="#" class="btn btn-primary">Invia un messaggio</a>
        </div>
    </div>
@endsection
