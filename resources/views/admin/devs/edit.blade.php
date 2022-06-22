<h2>MODIFICA LE TUE INFORMAZIONI PERSONALI:</h2>

<div class="container mb-5">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('admin.devs.update', $dev->id ) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- PROFILO PERSONALE --}}

                <div class="mb-3">
                  <label for="name" class="form-label fw-bold" style="color: rgb(255, 119, 0)">Nome</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $dev->name }}" {{ old('name', $dev->name) }}>
                </div>
                @error('name')
                    <div class="alert alert-warning">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="surname" class="form-label fw-bold" style="color: rgb(255, 119, 0)">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="{{ $dev->surname }}" {{ old('surname', $dev->surname) }}>
                </div>
                @error('surname')
                <div class="alert alert-warning">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold" style="color: rgb(255, 119, 0)">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $dev->email }}" {{ old('email', $dev->email) }}>
                </div>
                @error('Email')
                <div class="alert alert-warning">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold" style="color: rgb(255, 119, 0)">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                @error('password')
                <div class="alert alert-warning">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary mt-5 fw-bold">SUBMIT</button>

            </form>
