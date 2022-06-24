@extends('layouts.base')
@section('pageMain')

{{-- BARRA LATERALE DI NAVIGAZIONE --}}
<main class="d-flex container-bg mtplus">

    @include('partials.aside')
    
    <section class="section-main">
    
        <h2 class="my-text-color my-4">MODIFICA LE TUE INFORMAZIONI PERSONALI:</h2>
        
        <div class="container mb-5">
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('admin.devs.update', $dev->id ) }}" enctype="multipart/form-data">
        
                        @csrf
                        @method('PUT')
        
                        {{-- PROFILO PERSONALE --}}
        
                        <div class="mb-3">
                          <label for="name" class="form-label fw-bold my-text-color">Nome</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ $dev->name }}" {{ old('name', $dev->name) }}>
                        </div>
                        @error('name')
                            <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        <div class="mb-3">
                            <label for="surname" class="form-label fw-bold my-text-color">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" value="{{ $dev->surname }}" {{ old('surname', $dev->surname) }}>
                        </div>
                        @error('surname')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold my-text-color">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $dev->email }}" {{ old('email', $dev->email) }}>
                        </div>
                        @error('Email')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold my-text-color">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        @error('password')
                        <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
        
        
                        <button type="submit" class="btn-neon mt-5 fw-bold">SUBMIT</button>
        
                    </form>
                </section>
</main>
@endsection
