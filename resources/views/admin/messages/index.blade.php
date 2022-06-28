@extends('layouts.admin')
@section('pageMain')


<main class='d-flex bg-dashboard mtplus text-light'>
  @include('partials.sidebar')
  <div class="my-card flex-grow-1 ">
    <div class="card-body d-flex flex-column">
      <h4 class="mb-4 my-text-color">Nuovi messaggi</h4>
      @foreach ($messages as $message)
      <div class="message">
        
        <p>Da: {{$message->guest_mail}}</p>
        
        <p>{{$message->message}}</p>
      </div>
      
      
        
        
        
      
      @endforeach 
      <div class="paginate">
        {{ $messages->links() }}
      </div>
    </div>
  </div>

</main>













































@endsection