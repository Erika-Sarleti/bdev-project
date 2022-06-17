<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'review', 'rating', 'user_id',
    ];

    public function users() {
        return $this->belongsTo('App\User');
    }
}
