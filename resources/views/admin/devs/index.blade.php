@extends('layouts.base')
@section('pageMain')
    <div class="col-7 container-fluid d-flex flex-wrap justify-content-between">
        @foreach ($devs as $dev)
    <div class="card mt-5" style="width: 18rem;">

        
         <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="lorem picsum photos">
  
        {{-- DASHBOARD --}}


        <div class="card-body">
            <h3 class="card-title">
                {{$dev->name}}
            </h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('admin.devs.show', $dev->id)}}" class="btn btn-primary">Vai allo sviluppatore</a>
        </div>
    </div>
    @endforeach
    </div>

    {{ $devs->links() }}
    
@endsection
    

