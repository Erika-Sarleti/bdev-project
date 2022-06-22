<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\UserInfo;
use App\User;
use App\Review;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestindex(User $dev)
    {
        return view('guest.home', compact('dev'));
    }
    public function index(User $devs, UserInfo $userinfo)
    {
        $userinfo = UserInfo::all();

        $devs = User::paginate(10);
        return view('guest.index', [
            'devs' => $devs,
            'userinfo' => $userinfo,
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id_dev)
    {
        
        return view('guest.create', [
            // 'dev' => $dev,
            'id_dev' => $id_dev,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $dev_id =  $request->user_id;
        Review::create([
            'user_id' => $request->user_id,
            'rating' => $request->rating,
            'review' => $request->message,
        ]);
        
        return redirect()->route('guest.show', $dev_id)->with('status', 'Completed with success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dev = User::where('id', $id)->first();


        $userinfo = UserInfo::all();
        return view('guest.show', [
            'dev' => $dev,
            'userinfo' => $userinfo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
