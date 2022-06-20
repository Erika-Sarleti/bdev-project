@extends('layouts.base')
@section('pageTitle', 'Scrivi una recensione')


@section('pageMain')
<div class="container-fluid">
   <form action="{{ route("review.store")}}" method="POST" class="mt-3" id="form-review">
    @method("POST")
    @csrf

    <div class="form-group">
        <label for="rating">Rating</div>
        <select id="rating" name="rating" class="mt-3" form="form-review">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="message">Messaggio*</label>
        <textarea  name="message" class="form-control mt-3" id="message" rows="3"></textarea>
        <input name="user_id" value="{{ $dev->id }}" class="d-none" id="user_id">
        
        <button type="submit" class="btn btn-primary mt-3">Invia</button>
    </div>
    
  </form> 
</div>


@endsection