@extends('layouts.base')

@section('pageMain')
    <div id="app">


        <div class="d-flex flex-column flex-wrap justify-content-between align-items-center mt-5">

            {{-- <div class="filters d-flex flex-column mt-5 mb-5"> --}}

                <div class="col-6 mt-5 d-flex flex-column ">
                    <label for="role" class="align-self-center"> FILTRA PER RUOLO </label>
                    <select v-model="role" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <option value="back end">back end</option>
                        <option value="front end">front end</option>
                        <option value="full stack">full stack</option>
                        <option value="data analyst">data analyst</option>
                    </select>
    
                    <button @click="search" class="btn btn-outline-success mb-5 mt-2 px-5" type="submit">SEARCH</button>
                </div>


                <div class="col-6 d-flex flex-column"> 
                    <label for="nreview" class="align-self-center"> NUMERO RECENSIONI </label>
                    <input v-model="nreview" name="nreview" type="number">
                    <label for="mediarating" class="align-self-center"> MEDIA VOTI </label>
                    <input v-model="mediarating" name="mediarating" type="number" min="0" max="5">
                    <button class="btn btn-outline-success mt-2" @click="filter">APPLY FILTERS</button>
                </div>

            {{-- </div> --}}
        </div>
            <div class="col-10 container-fluid d-flex flex-wrap justify-content-between my-5">
            
            <div v-for="dev in devs" class="card mt-5" style="width: 18rem;">
               
                <img :src="dev.image" class="card-img-top" alt="devname">
                <div class="card-body">
                    <h5 class="card-title">
                        <span>@{{dev.user.name}}</span>

                    </h5>
                    <p class="card-text">@{{dev.description}}</p>
                    <small> @{{dev.media}}</small>
                    <small> @{{dev.nreview}}</small>

    
                </div>
            </div>
        </div>
    </div>

@endsection
    

