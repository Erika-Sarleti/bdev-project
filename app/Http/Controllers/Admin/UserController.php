<?php

namespace App\Http\Controllers\Admin;
      use App\Http\Controllers\Controller;
      use App\User;
      use App\UserInfo;
      use Illuminate\Http\Request;
      use Illuminate\Support\Facades\Auth;
      class UserController extends Controller
{

    public function index()
    {
        $userinfo = UserInfo::all();

        $devs = User::paginate(10);
        return view('admin.devs.index', [
            'devs' => $devs,
            'userinfo' => $userinfo,
        ]);
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
        // $data = $request->all();

        // $formData = [
        //     'user_id' => Auth::user()->id,
        // ] + $data;

        // $dev = User::create($formData);

        // return redirect()->route('admin.devs.show', $dev->id);


        $formData = $request->all();
        $dev = new User();
        $dev->fill($formData);
        $dev->save();
        $newDev = User::create($formData);
        return redirect()->route('admin.devs.show', $dev->id)->with('status', 'Complited with succes!');
    }


    public function show(User $dev, UserInfo $userinfo)
    {

        $userinfo = UserInfo::all();
        return view('admin.devs.show', [
            'dev'       => $dev,
            'userinfo'  => $userinfo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(User $dev)
    {
        if (Auth::user()->id !== $dev->id) abort(403);
        // private function getValidator(User $dev) {

        // // $categories = Category::all();
        // // $tags = Tag::all();
        // // return view('admin.posts.edit', [
        // //     'post'          => $post,
        // //     'categories'    => $categories,
        // //     'tags'          => $tags
        // // ]);
        //     }
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

                $formData = $request->all();

                $dev->update($formData);

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
