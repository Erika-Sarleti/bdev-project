<?php

namespace App\Traits;
use App\UserInfo;
use App\Review;
use App\Sponsor;
use App\User;
use Carbon\Carbon;


trait searchFilter {

function queryComposer($request) {

    $dataUserinfo   =   UserInfo::whereRaw('1 = 1');
    $dataReview     =   Review::all();
    $dataSponsor    =   User::with([
        'sponsors' => function ($query) {
            $query->where('end_time', '>', Carbon::now());
        }
    ])->get();
    if ($request->role) {
        $dataUserinfo->where(function($query) use ($request) {
            $test ="%" . $request->role . "%";
            $query->where('role', 'LIKE', $test);
        });
        }

    return $dataUserinfo;
}



}
