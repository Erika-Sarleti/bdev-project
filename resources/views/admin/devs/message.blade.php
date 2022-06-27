@extends('layouts.admin')
@section('pageMain')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Messaggi</h5>
      <p class="card-text">
        @foreach ($dev->messages as $message)
          <p>{{$message->message}}</p>
        @endforeach
      </p>
      
</div>
</div>











































@endsection