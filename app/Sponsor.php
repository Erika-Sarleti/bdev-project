<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'price', 'time'
    ];
    public function users() {
		return $this->belongsToMany('App\User');
	}
}
