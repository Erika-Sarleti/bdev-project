<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $validationRules = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|max:255',
    ];



    public function index(Message $message) //TODO:
    {
        $message = Message::all();
        return view('admin.devs.show', [
            'message' => $message,
        ]);
    }

    
    public function create()// TODO:
    {
  
    }

    public function store(Request $request, User $dev) //TODO:
    {
        $request->validate($this->validationRules, [
            'email' => 'Inserisci una mail valida',
        ]);

        $dev = User::where('id', $dev->id)->first();

        $formData = $request->all();

        $newMessage = Message::create([
            'user_id' => $dev->id,
            'name' => $formData['name'],
            'email' => $formData['email'],
            'message' => $formData['message'],
        ]);


        return redirect()->route('guest.show', $newMessage->id)->with('status', 'Completed with success!');
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
