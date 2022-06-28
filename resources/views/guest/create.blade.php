@extends('layouts.base')
@section('pageTitle', 'Scrivi una recensione')


@section('pageMain')
<div class="container-fluid blade-review">
   <form action="{{ route("guest.store")}}" method="POST" @change="checkedReview" class="mt-3" id="form-review">
    @method("POST")
    @csrf


    <h2>Scrivi una recensione</h2>

    <div class="form-group">
        <label for="rating" class="mt-5 label-review">Assegna un voto da 1 a 5:</div>
        <select id="rating" name="rating" style="width: 400px" form="form-review" class="form-select mt-3" aria-label="Default select example">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> <br>
        <label for="message" class="mt-5 label-review">Messaggio</label>
        <textarea name="message" style="width: 400px" v-model="messagereview" class="form-control mt-3 @error('message') is-invalid @enderror" required id="message" rows="3"></textarea>
        @error('message')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <input name="user_id" value="{{$id_dev}}" class='d-none' id="user_id">



        <button type="submit" id="btn-review" class="btn btn-primary mt-5 fw-bold text-white mb-5" disabled>Invia</button>
    </div>

  </form>
</div>


@endsection
