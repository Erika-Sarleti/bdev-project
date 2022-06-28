@extends('layouts.base')
@section('pageTitle', 'CiccioPlus')
@section('pageMain')

{{-- SCELTA DELLA SPONSORIZZAZIONE --}}
<section class="py-5 container-background">
    @if(session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-card-blur">
        <div class="container text-center pt-5">
            <h1 class="my-text-color2">Ciccio Plus</h1>
            <p class="text-white h-6">con CICCIO PLUS puoi aumentare la visibilità del tuo profilo!</p>
            <small  class="text-white">Scegli uno dei piano sponsorizzazione offerti da CICCIO PLUS per 24/72/144H comparirai tra i profili proposti dal sito!!</small>
        </div>
        <div class="container d-flex justify-content-center align-items-center gap-3 pt-5 text-white">
            <div class="card container-background d-flex flex-column justify-content-center align-items-center bubu">
                <h5 class="text-uppercase">Offerta</h5>
                <h2>24H</h2>
                <p>a solo:</p>
                <h3>2.99€</h3>
                <button class="btn-neon2 text-white" id="js-button-24">Promuovi</button>
            </div>
            <div class="card container-background d-flex flex-column justify-content-center align-items-center bubu">
                <h5 class="text-uppercase">Offerta</h5>
                <h2>72H</h2>
                <p>a solo:</p>
                <h3>5.99€</h3>
                <button class="btn-neon2 text-white" id="js-button-72">Promuovi</button>
            </div>
            <div class="card container-background d-flex flex-column justify-content-center align-items-center bubu">
                <h5 class="text-uppercase">Offerta</h5>
                <h2>144H</h2>
                <p>a solo:</p>
                <h3>9.99€</h3>
                <button class="btn-neon2 text-white" id="js-button-144">Promuovi</button>
            </div>
        </div>
        
        {{-- MESSAGGI DI VALIDAZIONE PAGAMENTO --}}
    
        {{-- FORM PAGAMENTO --}}
        <div class="row-cols-2">
            <div class="container content p-5">
                <form id="payment-form" action="{{ url('/admin/checkout?dev_id='. Auth::user()->id) }}" method="post">
                    @csrf
                    <section>
                        <label for="amount">
                            <span class="input-label text-white text-uppercase">Devi pagacce:</span>
                            <span id="js-amount" class="text-white h4 font-monospace"></span>
                            <div class="input-wrapper amount-wrapper">
                                <input class="d-none" id="amount" name="amount" type="tel" min="1" placeholder="amount" value="">
                            </div>
                        </label>
                        <div class="bt-drop-in-wrapper">
                            <div id="bt-dropin"></div>
                        </div>
                    </section>
                    
                    <input id="nonce" name="payment_method_nonce" type="hidden" />
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn-neon2 text-white px-5" type="submit">
                            <span>Pay</span>
                        </button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</section>
<script src="https://js.braintreegateway.com/web/dropin/1.33.2/js/dropin.min.js"></script> 
<script>
    var form = document.querySelector('#payment-form');
    var client_token = "{{ $token }}";
    braintree.dropin.create({
       authorization: client_token,
       selector: '#bt-dropin',
       locale: 'it_IT'
    },
    function (createErr, instance) {
       if (createErr) {
          console.log('Create Error', createErr);
          return;
       }
       form.addEventListener('submit', function (event) {
          event.preventDefault();
          instance.requestPaymentMethod(function (err, payload) {
             if (err) {
                console.log('Request Payment Method Error', err);
                return;
             }
             // Add the nonce to the form and submit
             document.querySelector('#nonce').value = payload.nonce;
             form.submit();
          });
       });
    });
 </script>
{{-- FINE PAGEMENTO --}}