@extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')
  <div class="d-flex flex-column ">
    <div class="card" style="width: 18rem; height: 100vh">
        <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="image {{ $dev->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $dev->name }}</h5>
          <p class="card-text">{{$dev->description}}</p>
  
          <a href="#form-message" class="btn btn-primary">Invia un messaggio</a>
        </div>
    </div >
    @php
      $id_dev=$dev->id;
    @endphp

    <a href="{{route('guest.create', ['id' => $id_dev])}}">Scrivi una Recensione</a>
    

    <form action="{{ route("message.store")}}" method="POST" class="mt-3" style="height: 100vh" id="form-message">
      @csrf

      <div class="form-group">
        <label for="name">Nome</div>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nome" >
        @error('name')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <label for="guest_mail">Email</label>
        <input name="guest_mail" type="email" name="email" class="form-control @error('guest_mail') is-invalid @enderror" required id="guest_mail" placeholder="Email">
        @error('guest_email')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <label for="message">Messaggio</label>
        <textarea name="message" class="form-control @error('guest_mail') is-invalid @enderror" required id="message" rows="3"></textarea>
        @error('message')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <input name="user_id" value="{{ $dev->id }}" class="d-none" id="user_id">
        <button type="submit" class="btn btn-primary">Invia</button>
      </div>
    </form>
  </div>
@endsection
