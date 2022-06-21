<?php

namespace App\Traits;
use App\UserInfo;
use App\Review;


trait searchFilter {

function queryComposer($request) {

    $dataUserinfo   =   UserInfo::whereRaw('1 = 1');
    $dataReview     =   Review::all();
    if ($request->role) {
        $dataUserinfo->where(function($query) use ($request) {
            $test = $request->role . "%";
            $query->where('role', 'LIKE', $test);
        });
        }

    //     if ($request->nreview){
    //         // dd($request->role);
    //         $ciao2 = $dataUserinfo->where(function($query) use ($request) {
    //             $test = $request->role . "%";
    //             $query->where('role', 'LIKE', $test);
    //         });
    //         dd($ciao2);
    //         $users_id = [];
    //         foreach ($dataReview as $user) {
    //             $users_id[] = $user->id;
    //             dd($users_id);
    //         }
    // }
    return $dataUserinfo;
}



}
