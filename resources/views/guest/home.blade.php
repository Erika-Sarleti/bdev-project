@extends('layouts.base')


@section('pageMain')
    
    <div class="container-index">
        <section class="container-section" id="section-start">
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
                <h3 class="my-text-white">Trovare lo sviluppatore adatto a te 
                    non è mai stato così semplice</h3>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200?random=1" alt="" class="my-img">
                            <small class="my-p my-text-white">Ricerca tra millemila sviluppatori iscritti alla nostra piattaforma</small>
                        </div>
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200?random=2" alt="" class="my-img">
                            <small class="my-p my-text-white">Mandagli un messaggio. Come su Tinder!</small>
                        </div>
                        <div class="my-card" style="width: 200px; height:400px">
                            <img src="https://picsum.photos/200?random=3" alt="" class="my-img">
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
                </h3>
                    {{-- CAROSELLO --}}
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="carousel-js">
                            @foreach($devs as $profile)
                          <div class="carousel-item">
                            <img src="{{ $profile->userinfo->image}}" class="d-block" style="width: 300px;" alt="...">
                          </div>
                            @endforeach
                          {{-- <div class="carousel-item">
                            <img src="https://picsum.photos/200/300?random=2" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/200/300?random=2" class="d-block w-100" alt="...">
                          </div> --}}
                        </div>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
    


    

