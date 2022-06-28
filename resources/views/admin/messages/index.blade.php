@extends('layouts.admin')
@section('pageTitle', 'Inbox')
@section('pageMain')


<main class='d-flex bg-dashboard mtplus text-light'>
  @include('partials.sidebar')
  <div class="container-blur-sidebar container-mex ">
    <div class="card-body d-flex flex-column">
      <h4 class="mb-4 my-text-color">Nuovi messaggi</h4>
      @foreach ($messages as $message)
      <div class="message d-flex justify-content-between border border-light">
        <div>
          <p>Da: {{$message->guest_mail}}</p>
          
          <p>{{$message->message}}</p>
        </div>

        <button class="btn-neon text-white align-self-center"onclick="location.href='mailto:{{$message->guest_mail}}';">Rispondi</button>
      </div>
      
      
        
        
        
      
      @endforeach 
      <div class="paginate">
        {{ $messages->links() }}
      </div>
    </div>
  </div>

</main>













































@endsection