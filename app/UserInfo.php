<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'user_id', 'cv','locality','image','github','description', 'phone', 'role',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
