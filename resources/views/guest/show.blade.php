@extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')

 {{-- SEZIONE PROFILO --}}
<section class="container">
  <div class="d-flex flex-column my-container-show">
    <div class="card">
      <img src="{{ $dev->userinfo->image }}" class="my-image" alt="image {{ $dev->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $dev->name }}</h5>
          <p class="card-text">{{$dev->description}}</p>
          <small class="text-muted">numero recensioni: {{$dev->reviews->count('reviews')}}</small>
          <div class="text-dark">media voti:
            <script>
              let media = 0;
              @foreach($dev->reviews as $vote)
                media += {{ $vote->rating }};
              @endforeach
              media = Math.floor(media / {{ $dev->reviews->count('reviews') }});
              document.write(media);
            </script>
          </div>

          <a href="#form-message" class="btn btn-primary">Invia un messaggio</a>
        </div>
    </div >
  </div>
  </section>


  {{-- SEZIONE RECENSIONI --}}
  <section class="container d-flex justify-content-center align-items-center">
    @php
      $id_dev=$dev->id;
    @endphp

    <a href="{{route('guest.create', ['id' => $id_dev])}}">Scrivi una Recensione</a>

  </section>


  {{-- SEZIONE MESSAGGI --}}
  <section class="container">


    <form action="{{ route("message.store")}}" method="POST" @change="checkedMessage" class="mt-3" style="height: 100vh" id="form-message">
      @csrf

      <div class="form-group">
        <label for="name">Nome</div>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nome" >
        @error('name')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <label for="guest_mail">Email</label>
        <input name="guest_mail" type="email" name="email" v-model="guest_mail" class="form-control @error('guest_mail') is-invalid @enderror" required id="guest_mail" placeholder="Email">
        @error('guest_email')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <label for="message">Messaggio</label>
        <textarea name="message" v-model="message" class="form-control @error('guest_mail') is-invalid @enderror" required id="message" rows="3"></textarea>
        @error('message')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <input name="user_id" value="{{ $dev->id }}" class="d-none" id="user_id">
        <button id="btn-message" type="submit" class="btn btn-primary" disabled>Invia</button>
      </div>
    </form>
  </div>
  </section>
@endsection
