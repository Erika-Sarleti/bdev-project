<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // private $validationRules = [
    //     'name' => 'max:255|min:2',
    //     'email' => 'required|email|max:255|min:5',
    //     'message' => 'required|max:255|min:4',
    // ];

    private function validation() {
        return [
            'name'      => 'required|max:255|min:2',
            'email'     => 'required|email|max:255|min:5',
            'message'   => 'required|max:255|min:4',
        ];
    }



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


        Message::create([
            'user_id' => $request->user_id,
            'guest_mail' => $request->guest_mail,
            'message' => $request->message,
        ]);


        return redirect()->route('guest.show', $request->user_id)->with('status', 'Messaggio inviato con successo!');
    }

    
    public function show(Message $message) // TODO:
    {
        
    }


    public function destroy(Message $message) // TODO:
    {
        //
    }
}
