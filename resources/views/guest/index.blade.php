@extends('layouts.base')
@section('pageTitle', 'Index')
@section('pageMain')
    <div id="app">

        <div class="container-background">
            <div class="d-flex flex-column flex-wrap justify-content-between align-items-center pt-5">
    
                <h1 class="pt-5 my-text-color">Inizia la tua ricerca qui</h1>
    
                    <div class="col-6 mt-5 d-flex flex-column ">
                        <label for="role" class="align-self-center my-text-color2"> FILTRA PER RUOLO </label>
                        <select v-model="role" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <option value="back end">back end</option>
                            <option value="front end">front end</option>
                            <option value="full stack">full stack</option>
                            <option value="data analyst">data analyst</option>
                            <option value="project manager">project manager</option>
                        </select>
        
                        <button @click="search" class="btn-neon mb-5 mt-2 px-5" type="submit">SEARCH</button>
                    </div>
    
    
                    <div class="col-6 d-flex flex-column"> 
                        <label for="nreview" class="align-self-center my-text-color2"> NUMERO RECENSIONI </label>
                        <input v-model="nreview" name="nreview" type="number">
                        <label for="mediarating" class="align-self-center my-text-color2"> MEDIA VOTI </label>
                        <input v-model="mediarating" name="mediarating" type="number" min="0" max="5">
                        <button class="btn-neon mt-2" @click="filter">APPLY FILTERS</button>
                    </div>
    
                {{-- </div> --}}
            </div>
                <div class="container-fluid py-5 d-flex justify-content-center align-items-center flex-wrap row-cols-4">

                    <div v-for="dev in devs" class="m-3">
                        <div class="card profile-card-3">
                            <div class="background-block">
                                <img :src="picsum + dev.user.id" alt="profile-sample1" class="background"/>
                            </div>
                            <div class="profile-thumb-block">
                                <img :src="dev.image" :alt="dev.name" class="profile"/>
                            </div>
                            <div class="card-content">
                            <h2>@{{dev.user.name}}<small>@{{dev.role}}</small></h3>
                            <div class="icon-block"><a href="#" class="my-text-color-pink">Voto:<i>@{{dev.media}}</i></a><a href="#" class="my-text-color-pink">Recensioni<i>@{{dev.nreview}}</i></a></div>
                            <div class="py-3">
                                <a :href="linkShow + dev.user.id" class="btn-neon2 align-self-center">VIEW PROFILE</a>
                            </div>
                        </div>
                        </div>
                        
                    </div>
            </div>

        </div>
    </div>

@endsection