<!-- DASHBOARD: CHAT -->

{{-- @extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')
    <div class="card" style="width: 18rem;">
        <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$dev->name}}</h5>
          <p class="card-text">{{$dev->description}}</p>
          {{-- TODO: il link deve reindirizzare al form per inviare il messaggio, CREDO serva un  --}}
          {{-- <a href="{{route('admin.devs.edit', $dev->id)}}" class="btn btn-primary">Invia un messaggio</a> --}}
          {{-- <div class="card">
            <div class="card-body">
              <h5 class="card-title">Messaggi</h5>
              <p class="card-text">
                @foreach ($dev->messages as $message)
                  <p>{{$message->message}}</p>
                @endforeach
              </p>
              
        </div>
    </div>
@endsection --}}
