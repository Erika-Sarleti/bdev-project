@extends('layouts.base')
@section('pageMain')

{{-- pagamento --}}
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

<section class="pt-5">
    
    
    <div class="content pt-5">
        <form id="payment-form" action="{{ url('/admin/checkout') }}" method="post">
            @csrf
            <section>
                <label for="amount">
                    <span class="input-label">Amount</span>
                    <div class="input-wrapper amount-wrapper">
                        <input id="amount" name="amount" type="tel" min="1" placeholder="amount" value="10">
                    </div>
                </label>
                <div class="bt-drop-in-wrapper">
                    <div id="bt-dropin"></div>
                </div>
            </section>
            
            <input id="nonce" name="payment_method_nonce" type="hidden" />
            <button class="button" type="submit">
                <span>Pay</span>
            </button>
        </form>
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