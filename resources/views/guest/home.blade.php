@extends('layouts.base')


@section('pageMain')
    
    <div class="container-index">
        <section class="container-section" id="section-start">
            <div class="center-section">
                
                <h4 class="my-text-color">Inizia qui la ricerca dello sviluppatore su misura per il tuo business:</h4>
                <a href="{{route('guest.index')}}" class="btn-neon">Vai alla ricerca</a>
                
            </div>
                <div class="container-buttons">
                    <a href="#section-how" class="btn-neon">
                        v
                    </a>
                </div>
        </section>

        {{-- sezione come usare il sito --}}
        <section class="container-section" id="section-how">

            <div class="center-section-how">
                <h3 class="my-text-white">Trovare lo sviluppatore adatto a te 
                    non è mai stato così semplice</h3>
                    <div class="d-flex justify-content-evenly align-items-center my-3">
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200" alt="" class="my-img">
                            <small class="my-p my-text-white">Ricerca tra millemila sviluppatori iscritti alla nostra piattaforma</small>
                        </div>
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200" alt="" class="my-img">
                            <small class="my-p my-text-white">Mandagli un messaggio. Come su Tinder!</small>
                        </div>
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200" alt="" class="my-img">
                            <small class="my-p my-text-white">Il tuo sito sarà pronto in brevissimo tempo! Perché tu vali. ci metto altro testo perché così simulo un testo lungo, va bene?</small>
                        </div>
                    </div>
                
            </div>

            <div class="container-buttons">
                <a href="#section-start" class="btn-neon">
                    s
                </a>
                <a href="#section-evidence" class="btn-neon">
                    v
                </a>
            </div>
        </section>

        {{-- sezione profili in evidenza --}}
        <section class="container-section" id="section-evidence">
            <div class="center-section-evidence">
                <h3 class="my-text-color">
                    Scopri la nostra rete di migliori sviluppatori in Italia:
                    <div class="d-flex overlay">
                        @foreach ($devs as $dev)
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <a href="{{ route('guest.show', $dev->id) }}" class="my-text-color">
                                    {{ $dev->name }}
                                    <img src="{{ $dev->userinfo->image }}" class="my-img-round">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </h3>
            </div>

            <div class="container-buttons">
                <a href="#section-how" class="btn-neon">
                    s
                </a>
                <a href="#section-say" class="btn-neon">
                    v
                </a>
            </div>
        </section>

        {{-- sezione dicono di noi --}}
        <section class="container-section" id="section-say">
            <div class="center-section">
                ciao, sono la sezione dicono di noi
            </div>

            <div class="container-buttons">
                <a href="#section-evidence" class="btn-neon">
                    s
                </a>
                <a href="#footer" class="btn-neon">
                    v
                </a>
            </div>
        </section>
    </div>
    
@endsection
    


    

