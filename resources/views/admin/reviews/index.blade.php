@extends('layouts.admin')
@section('pageMain')

@include('partials.sidebar');

<div class="card">
    <div class="card-body">
      <h5 class="card-title">RECENSIONI:</h5>
      <p class="card-text">

        @foreach ($reviews as $review)
        <span>Recensione:</span>
        <p>{{$review->review}}</p>
        <span>Voto:</span>
        <p>{{$review->rating}}</p>
        @endforeach
      </p>
      
      
</div>
</div>