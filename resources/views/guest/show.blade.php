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
    </div >
    <form action="{{ route("message.store")}}" method="POST" class="mt-3" style="height: 100vh" id="form-message">
      @method("POST")
      @csrf

      <div class="form-group">
        <label for="name">Nome</div>
        <input type="text" class="form-control" id="name" placeholder="Nome">
        <label for="guest_mail">Email*</label>
        <input name="guest_mail" type="email" class="form-control" id="guest_mail" placeholder="Email">
        <label for="message">Messaggio*</label>
        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
        <input name="user_id" value="{{ $dev->id }}" class="d-none" id="user_id">
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
@endsection
