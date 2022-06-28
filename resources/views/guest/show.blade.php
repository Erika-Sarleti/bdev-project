@extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')

 {{-- SEZIONE PROFILO --}}

 <main class="d-flex main-show-dev container-bg mtplus">



   
   <section class="section-main section-show-dev">
     
     <div class="container mb-5">
        @if(session()->has('status'))
                  <div class="alert alert-success">
                     {{ session()->get('status') }}
                  </div>
        @endif
          <div class="row">
              <div class="col">

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

                  <span>Numero recensioni:</span> <p class="card-text"> {{$dev->reviews->count('reviews')}}</p> <br>
                  <span>Media voti: </span>
                  <p class="card-text">
            <script>
              let media = 0;
              @foreach($dev->reviews as $vote)
                media += {{ $vote->rating }};
              @endforeach
              media = Math.floor(media / {{ $dev->reviews->count('reviews') }});
              document.write(media);
            </script>
                  </p>
          </div>

          <a href="#form-message" class="btn btn-primary mt-5 fw-bold text-white me-5 mb-5">Invia un messaggio</a>

          @php
            $id_dev=$dev->id;
          @endphp

          <a href="{{route('guest.create', ['id' => $id_dev])}}" class="btn btn-primary mt-5 fw-bold text-white ms-5 mb-5">Scrivi una Recensione</a>

                  
          </div>
      </div>
            </section>

            


</main>

  {{-- SEZIONE MESSAGGI --}}
  <section class="container mt-5">

    <h2>Manda un messaggio:</h2>

    <form action="{{ route("message.store")}}" method="POST" @change="checkedMessage" class="mt-3" style="height: 100vh" id="form-message">
      @csrf

      <div class="form-group">
        <label for="name" class="fw-bold invio-mex">Nome</div>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nome" >
        @error('name')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <label for="guest_mail" class="fw-bold invio-mex mt-4">Email*</label>
        <input name="guest_mail" type="email" name="email" v-model="guest_mail" class="form-control @error('guest_mail') is-invalid @enderror" required id="guest_mail" placeholder="Email">
        @error('guest_email')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <label for="message" class="fw-bold invio-mex mt-4">Messaggio*</label>
        <textarea name="message" v-model="message" placeholder="Messaggio" class="form-control @error('guest_mail') is-invalid @enderror" required id="message" rows="3"></textarea>
        @error('message')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <input name="user_id" value="{{ $dev->id }}" class="d-none" id="user_id">
        <button id="btn-message" type="submit" class="btn btn-primary mt-4 fw-bold text-white" disabled>Invia</button>
      </div>
    </form>
  </div>
  </section>
@endsection
