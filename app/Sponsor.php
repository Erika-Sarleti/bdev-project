<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'price', 'time', 'end_time', 'created_at'
    ];
    public function users() {
		return $this->belongsToMany('App\User')->withPivot('sponsor_user');
	}
}
