<!-- DASHBOARD -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    dati della Dashboard

                        {{-- PRIMA PAGINA INGRESSO SITO DA LOGGATI  --}}
                        IL MIO profilo - EDITOR
                        CHAT - SHOW

                    {{-- <a class="navbar-brand" href="{{route('admin.devs.edit', $dev->id)}}">Modifica il profilo</a> --}}
                </div>
            </div>
HOME

        </div>
    </div>
</div>
@endsection

