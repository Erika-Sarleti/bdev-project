@extends('layouts.base')

@section('pageMain')
    <div id="app">


        <div class="col-7 container-fluid d-flex flex-wrap justify-content-between mt-5">

                <div class="filters d-flex flex-column mt-5 mb-5">

                <label for="role"> FILTRA PER RUOLO </label>
                <input v-model="role" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                <button @click="search" class="btn btn-outline-success mb-5 mt-2" type="submit">SEARCH</button>

                
                <label for="nreview"> NUMERO RECENSIONI </label>
                <input v-model="nreview" name="nreview" type="number">

                <label for="mediarating"> MEDIA VOTI </label>
                <input v-model="mediarating" name="mediarating" type="number" min="0" max="5">


                <button class="btn btn-outline-success mt-2" @click="filter">APPLY FILTERS</button>

            </div>
            
            <div v-for="dev in devs" class="card mt-5" style="width: 18rem;">
                <img :src="dev.image" class="card-img-top" alt="devname">
                <div class="card-body">
                    <h5 class="card-title">
                        <span>@{{dev.user.name}}</span>

                    </h5>
                    <p class="card-text">@{{dev.description}}</p>
                    <small> @{{dev.media}}</small>
                    <small> @{{dev.nreview}}</small>

                    <a :href="linkShow + dev.user.id" class="btn btn-primary">Vai allo sviluppatore</a>
    
    
                </div>
            </div>
        </div>
    </div>

@endsection
    





{{-- @foreach ($devs as $dev)
<div class="card mt-5" style="width: 18rem;">
    <img src="{{ $dev->userinfo->image }}" class="card-img-top" alt="{{$dev->name}}">
    <div class="card-body">
        <h5 class="card-title">
            <span>{{$dev->name}}</span>
        </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{ route('guest.show', $dev->id)}}" class="btn btn-primary">Vai allo sviluppatore</a>


    </div>
</div>
@endforeach --}}

