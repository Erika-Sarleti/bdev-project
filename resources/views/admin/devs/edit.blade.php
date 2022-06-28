@extends('layouts.admin')
@section('pageTitle', 'Modifica il tuo profilo')
@section('pageMain')

{{-- BARRA LATERALE DI NAVIGAZIONE --}}
<main class="d-flex bg-dashboard mtplus">

    @include('partials.sidebar');
    
    <div class="container-blur-sidebar flex-grow-1 ">
        <div class="card-body d-flex flex-column">
        <h2 class="my-text-color my-4">MODIFICA LE TUE INFORMAZIONI PERSONALI:</h2>
        
        <div class="container mb-5">
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('admin.devs.update', $dev->id ) }}" enctype="multipart/form-data">
        
                        @csrf
                        @method('PUT')
        
                        {{-- PROFILO PERSONALE --}}
        
                        <div class="mb-3">
                          <label for="name" class="form-label fw-bold text-white">Nome</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ $dev->name }}" {{ old('name', $dev->name) }}>
                        </div>
                        @error('name')
                            <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        <div class="mb-3">
                            <label for="surname" class="form-label fw-bold text-white">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" value="{{ $dev->surname }}" {{ old('surname', $dev->surname) }}>
                        </div>
                        @error('surname')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        @php
                            $info = $dev->userinfo

                            
                        @endphp
                            
                        <div class="mb-3">
                            <label for="cv" class="form-label fw-bold text-white">Cv</label>
                            <input type="text" class="form-control" id="cv" name="cv" value="{{ $info->cv }}" {{ old('cv', $info->cv) }}>
                        </div>
                        @error('cv')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold text-white">Image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{ $info->image }}" {{ old('image', $info->image) }}>
                        </div>
                        @error('Email')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="locality" class="form-label fw-bold text-white">Locality</label>
                            <input type="text" class="form-control" id="locality" name="locality" value="{{ $info->locality }}" {{ old('locality', $info->locality) }}>
                        </div>
                        @error('locality')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="github" class="form-label fw-bold text-white">Github</label>
                            <input type="text" class="form-control" id="github" name="github" value="{{ $info->github }}" {{ old('github', $info->github) }}>
                        </div>
                        @error('github')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold text-white">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $info->description }}" {{ old('description', $info->description) }}>
                        </div>
                        @error('description')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="role" class="form-label fw-bold text-white">Role</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ $info->role }}" {{ old('role', $info->role) }}>
                        </div>
                        @error('role')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-bold text-white">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $info->phone }}" {{ old('phone', $info->phone) }}>
                        </div>
                        @error('phone')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror


                        <div class="mb-3 d-flex flex-column">
                            <label for="skill" class="form-label fw-bold my-text-color">Skills</label>
                            <div class="d-flex">
                                 @foreach ($skills as $skill)
                                    <input class="form-check-input" type="checkbox" name="skills[]" id="skill-{{ $skill->id }}" value="{{ $skill->id }}">
                                    <label class="form-check-label me-4 ms-1 text-light"  for="skill-{{ $skill->id }}">{{ $skill->name }}</label>
                                @endforeach
                            </div>
                        </div>
                        

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn-neon mt-5 fw-bold ">SUBMIT</button>
                        </div>
                    
        
                    </form>
                </div>
            </div>     
</main>
@endsection
