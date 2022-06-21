<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $validationRules = [
        'guest_mail' => 'required|max:255|email',
        'message' => 'required|max:255'
    ];


    public function index(Message $message) //TODO:
    {
        $message = Message::all();
        return view('admin.devs.show', [
            'message' => $message,
        ]);
    }

    
    public function create(Request $request, User $dev)// TODO:
    {

    }

    public function store(Request $request, User $dev) 
    {

        $request->validate($this->validationRules, [
            'guest_mail' => 'Inserisci una mail valida',
            'message' => 'Il campo non può essere vuoto'
        ]);
        
       

        Message::create([
            'user_id' => $request->user_id,
            'guest_mail' => $request->guest_mail,
            'message' => $request->message,
        ]);


        return redirect()->route('guest.show', $request->user_id)->with('status', 'Completed with success!');
    }

    
    public function show(Message $message) // TODO:
    {
        //
    }


    public function destroy(Message $message) // TODO:
    {
        //
    }
}
