<?php

namespace App\Traits;

use App\Model\Apartment;
use App\Model\Service;
use App\UserInfo;


trait searchFilters {

function queryComposer($request) {

    $dataUserinfo = UserInfo::whereRaw('1 = 1');

        if ($request->role) {
            $dataUserinfo->where(function($query) use ($request) {
                $query->where('role', 'LIKE', $request->role);
            });
        }

        return $dataUserinfo;
}



}