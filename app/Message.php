<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = [
        'guest_mail', 'message', 'user_id',
    ];



    public function users() {
        return $this->belongsTo('App\User');
    }
}
