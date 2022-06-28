<?php

namespace App\Http\Controllers\Admin;
      use App\Http\Controllers\Controller;
      use App\User;
      use App\UserInfo;
      use App\Message;
      use App\Skill;
      use App\Review;
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


    public function message()
    {
        $messages = Message::where('user_id', Auth::user()->id)->paginate(4);
    
        return view('admin.messages.index', compact('messages'));
    }

    public function review()
    {
        $reviews = Review::where('user_id', Auth::user()->id)->paginate(4);
    
        return view('admin.reviews.index', compact('reviews'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $formData = $request->all();
        $dev = new User();
        $dev->fill($formData);
        $dev->save();
        $newDev = User::create($formData);
        return redirect()->route('admin.devs.show', $dev->id)->with('status', 'Complited with succes!');
    }


    public function show(User $dev, UserInfo $userinfo, Message $message)
    {
            
        $dev = $dev->with('skills')->find($dev->id);       
        $message = Message::all();

        $userinfo = UserInfo::where('user_id', Auth::user()->id);
        return view('admin.devs.show', [
            'dev'       => $dev,
            'userinfo'  => $userinfo,
            'message'   => $message,
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
        $skills = Skill::all();

        $userinfo = UserInfo::where('user_id', Auth::user()->id);

        if (Auth::user()->id !== $dev->id) abort(403);


        return view('admin.devs.edit', [
            'dev' => $dev,
            'userinfo' => $userinfo,
            'skills' => $skills,
        ]);

    }


    public function update(Request $request, User $dev, UserInfo $userinfo)
    {
                $userinfo = UserInfo::where('user_id', Auth::user()->id)->first();
                $formData = $request->all();
               
                $dev->skills()->sync($formData['skills']);

                $updateInfo = [
                    'locality' => $request->locality,
                    'cv'       =>  $request->cv,
                    'image'=> $request->image,
                    'github' => $request->github,
                    'description'=>  $request->description,
                    'role'=> $request->role,
                    'phone' =>$request->phone,

                ];


                $dev->userInfo()->update($updateInfo);

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

 //DASHBOARD:
    public function myindex(User $dev) {
        return view('admin.home', compact('dev'));
    }
}
