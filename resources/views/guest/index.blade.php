@extends('layouts.base')

@section('pageMain')
    <div id="app">


        <div class="d-flex flex-column flex-wrap justify-content-between align-items-center mt-5">

            <h1 class="pt-5">Inizia la tua ricerca qui</h1>

                <div class="col-6 mt-5 d-flex flex-column ">
                    <label for="role" class="align-self-center"> FILTRA PER RUOLO </label>
                    <select v-model="role" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <option value="back end">back end</option>
                        <option value="front end">front end</option>
                        <option value="full stack">full stack</option>
                        <option value="data analyst">data analyst</option>
                        <option value="project manager">project manager</option>
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
               
                <img v-If="dev.image === null" src="https://picsum.photos/300/200" class="card-img-top" :alt="dev.name">
                <img v-else  :src="dev.image" class="card-img-top" :alt="dev.name">
                <div class="card-body d-flex flex-column gap-3">
                    <h5 class="card-title">
                        <span>@{{dev.user.name}}</span>
                    </h5>
                    <small>@{{dev.role}}</small>
                    <p class="card-text">@{{dev.description}}</p>
                    <small>Media Voti: @{{dev.media}}</small>
                    <small>Recensioni: @{{dev.nreview}}</small>

                    <a :href="linkShow + dev.user.id" class="btn btn-primary">Vai allo sviluppatore</a>
    
                </div>
            </div>
        </div>
    </div>

@endsection