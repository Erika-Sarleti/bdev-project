@extends('layouts.admin')
@section('pageMain')

@include('partials.sidebar');

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Messaggi</h5>
      <p class="card-text">

        @foreach ($messages as $message)
        <span>Messaggio:</span>
        <p>{{$message->message}}</p>
        <span>Email mittente:</span>
        <p>{{$message->guest_mail}}</p>
        @endforeach
      </p>
      
      
</div>
</div>











































@endsection