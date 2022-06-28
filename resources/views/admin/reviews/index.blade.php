@extends('layouts.admin')
@section('pageTitle', 'Recensioni')
@section('pageMain')


<main class='d-flex bg-dashboard mtplus text-light'>
  @include('partials.sidebar')
  <div class="container-blur-sidebar container-mex">
    
    <div class="d-flex flex-column">
      <h4 class="my-text-color mb-4">Recensioni</h4>
      {{-- Recensioni --}}
      <div class="message-container">
        @foreach ($reviews as $review)
              <div class="message">
                
                <p>Voto: {{$review->rating}}</p>
                <span>Recensione:</span>
                <p>{{$review->review}}</p>
              </div>
          
        @endforeach 
      </div> 
      <div class="paginate">
        {{ $reviews->links() }}
      </div>
      

      
     
      
    </div>
    
  </div>

</main>