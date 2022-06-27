@extends('layouts.base')


@section('pageMain')
    
    <div class="container-index">
        <section class="container-section-start" id="section-start">
            <div class="center-section">
                
                <h4 class="my-text-color">Inizia qui la ricerca dello sviluppatore su misura per il tuo business:</h4>
                <form action="{{ route('guest.index') }}" method="GET">
                    <input type="text" placeholder="Cerca per ruolo" class="form-control me-2 flex-grow-1" name="role"> 
                    <button class="btn btn-primary text-light">Cerca</button>
                </form>


                
                
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
                <h3 class="my-text-color">Trovare lo sviluppatore adatto a te 
                    non è mai stato così semplice</h3>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200?random=1" alt="" class="my-img">
                            <small class="my-p text-white">Ricerca tra millemila sviluppatori iscritti alla nostra piattaforma</small>
                        </div>
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200?random=2" alt="" class="my-img">
                            <small class="my-p text-white">Mandagli un messaggio. Come su Tinder!</small>
                        </div>
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200?random=3" alt="" class="my-img">
                            <small class="my-p text-white">Il tuo sito sarà pronto in brevissimo tempo! Perché tu vali. ci metto altro testo perché così simulo un testo lungo, va bene?</small>
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
                </h3>
            </div>
                    {{-- CAROSELLO --}}
                    <div id="carouselExampleSlidesOnly" class="carousel slide section-carousel" data-bs-ride="carousel" data-bs-interval="2000">
                        <div class="carousel-inner" id="carousel-js">
                            @foreach($devs as $profile)
                                <div class="carousel-item">
                                    <a href="{{route('guest.show', [$profile->id])}}" class="my-card">
                                            <img src="{{ $profile->userinfo->image}}" class="d-block " style="width: 400px; height:200px;" alt="{{ $profile->name }}">
                                            <p class="my-text-color">{{ $profile->name }}</p>
                                            <p class="text-white">{{$profile->userinfo->description}}</p>
                                    </a>
                                </div>
                                @endforeach
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev" id="js-prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next" id="js-next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                        </div>
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
            <div class="center-section-say">
                <h2 class="my-text-color">Si sono affidati a noi</h2>
                <ul>
                    <li>fiat</li>
                    <li>radio dj</li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
    


    

