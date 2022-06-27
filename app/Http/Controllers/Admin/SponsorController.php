<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Braintree;
use App\Http\Controllers\Controller;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),
        ]);
        
        $token = $gateway->ClientToken()->generate();
        
    
        return view('admin.devs.payments.index',[
            'token' => $token
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),
        ]);

        
        $amount = $request->amount;
        $nonce = $request->payment_method_nonce;
        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        $dev = User::where('id', Auth::user()->id)->first();

        if ($result->success) {
            $transaction = $result->transaction;
            if ($request->amount == '2.99') {
                $sponsor = [
                    'sponsor_id' => 1,
                ];
                $dev->sponsors()->attach($sponsor, ['created_at' => Carbon::now(), 'end_time' => Carbon::now()->add('hour', 24)]);
                return back()->with('success_message', 'Transaction ID: ' . $transaction->id);
            }
            if ($request->amount == '5.99') {
                $sponsor = [
                    'sponsor_id' => 2,
                ];
                $dev->sponsors()->attach($sponsor, ['created_at' => Carbon::now(), 'end_time' => Carbon::now()->add('hour', 72)]);
                return back()->with('success_message', 'Transaction ID: ' . $transaction->id);
            }
            if ($request->amount == '9.99') {
                $sponsor = [
                    'sponsor_id' => 3,
                ];
                $dev->sponsors()->attach($sponsor, ['created_at' => Carbon::now(), 'end_time' => Carbon::now()->add('hour', 144)]);
                return back()->with('success_message', 'Transaction ID: ' . $transaction->id);
            }
        } else {
            $errorString = "";
            foreach ($result->errors->deepAll() as $error) {
                $errorString .= 'error: '. $error->code . ": " . $error->message . "\n";
            }
            return back()->withErrors('error:'. $errorString);
        }
        

    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        //
    }
}
