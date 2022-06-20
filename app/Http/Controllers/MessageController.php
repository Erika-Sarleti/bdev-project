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

    
    public function create(Request $request, User $dev)// TODO:
    {

        $formData = $request->all();

        $newMessage = Message::create([
            'user_id' => $dev->id,
            'email' => $formData['email'],
            'message' => $formData['message'],
        ]);

        return redirect()->route('guest.show', $newMessage)->with('status', 'Complited with succes!');
    }

    public function store(Request $request, User $dev) //TODO:
    {
        // $request->validate($this->validationRules, [
        //     'email' => 'Inserisci una mail valida',
        // ]);

        $id = User::where('id', $dev->id)->get('id');
        // dd($dev);
        // $formData = $request->all();
        // dd($formData);
        
       

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
