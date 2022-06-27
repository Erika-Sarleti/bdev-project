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
    

    <form action="{{ route("message.store")}}" method="POST" class="mt-3" style="height: 100vh" id="form-message">
      @csrf

      <div class="form-group">
        <label for="name">Nome</div>
        <input type="text" class="form-control" id="name" placeholder="Nome">
        <label for="guest_mail">Email*</label>
        <input name="guest_mail" type="email" class="form-control" id="guest_mail" placeholder="Email">
        <label for="message">Messaggio*</label>
        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
        <input name="user_id" value="{{ $dev->id }}" class="d-none" id="user_id">

        
        <button type="submit" class="btn btn-primary">Invia</button>
      </div>
    </form>
  </div>
  </section>
@endsection
