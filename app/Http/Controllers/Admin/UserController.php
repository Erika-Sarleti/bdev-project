<?php

namespace App\Http\Controllers\Admin;
      use App\Http\Controllers\Controller;
      use App\User;
      use Illuminate\Http\Request;
      class UserController extends Controller
{

    public function index()
    {
        $devs = User::paginate(10);
        return view('admin.devs.index', compact('devs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $dev)
    { 

        return view('admin.devs.show', compact('dev'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $dev)
    {
        return view('admin.devs.edit', compact('dev'));
    }


    public function update(Request $request, User $dev)
    {
         //All'array validators sto sommando un altro array slug, quindi diventa un unico array. La funzione Rule è di laravel e serve per rendere le   funzioni customizzabili.Ignore unique serve perché, nel caso di edit, ad ogni aggiornamento mi darebbe errore perché continuerebbe a trovare loslug doppione perché sto modificando, quindi già esiste nel DB
                 // $request->validate($this->$validators + ['slug'  =>  [
                 //     'required',
                 //     Rule::unique('posts')->ignore($post->id),
                 //     'max:100'
                 // ]]);
                 // qui invece gli passo l'argomento con $post
                //  $request->validate($this->getValidators($dev));
                 $dev->update($request->all());
                 return redirect()->route('admin.devs.show', $dev->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
