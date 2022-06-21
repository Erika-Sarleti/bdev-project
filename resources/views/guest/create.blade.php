<!-- QUI IL GUEST PUò SCRIVERE UNA RECENSIONE!!!!!!! -->

@extends('layouts.base')
@section('pageTitle', 'Scrivi una recensione')


@section('pageMain')
<div class="container-fluid">
   <form action="{{ route("guest.store")}}" method="POST" class="mt-3" id="form-review">
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
        @error('message')
        <div class="alert alert-warning">{{ $message }}</div>
        @enderror

        <input name="user_id" value="{{$id_dev}}" class='d-none' id="user_id">
  
        

        <button type="submit" class="btn btn-primary mt-3">Invia</button>
    </div>
    
  </form> 
</div>

<span v-for="voto in 5" 
                    :key="voto.vote_average"
                     >
                     
                     <i v-if="voto <= valoreVoto(filmCard.vote_average)" class="bi bi-star-fill text-warning"></i>
                     <i v-else class="bi bi-star text-muted"></i>
                     </span>


@endsection