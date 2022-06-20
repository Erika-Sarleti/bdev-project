@extends('layouts.base')
@section('pageMain')
    <div class="col-7 container-fluid d-flex flex-wrap justify-content-between">
        @foreach ($devs as $dev)
        <div class="card mt-5" style="width: 18rem;">
            <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="{{$dev->name}}">
            <div class="card-body">
                <h5 class="card-title">
                    <span>{{$dev->name}}</span>
                </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('guest.show', $dev->id)}}" class="btn btn-primary">Vai allo sviluppatore</a>


                Ciao a tuttii
            </div>
        </div>
        @endforeach
    </div>
    
@endsection
    

