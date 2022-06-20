@extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')
  <div class="d-flex flex-column ">
    <div class="card" style="width: 18rem; height: 100vh">
        <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="image {{ $dev->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $dev->name }}</h5>
          <p class="card-text">{{$dev->description}}</p>
          {{-- TODO: il link deve reindirizzare al form per inviare il messaggio, CREDO serva un  --}}
          <a href="#form-message" class="btn btn-primary">Invia un messaggio</a>
        </div>
    </div >
    <form action="{{ route("message.store")}}" method="POST" class="mt-3" style="height: 100vh" id="form-message">
      @method("POST")
      @csrf

      <div class="form-group">
        <label for="name">Nome</div>
        <input type="text" class="form-control" id="name" placeholder="Nome">
        <label for="email">Email*</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
        <label for="message">Messaggio*</label>
        <textarea class="form-control" id="message" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
@endsection
