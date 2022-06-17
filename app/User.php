<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'slug'
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function userInfo(){
        return $this->hasOne('App\UserInfo');
    }


    public function messages() {
        return $this->hasMany('App\Message');
    }

    public function reviews() {
        return $this->hasMany('App\Review');
    }

    public function services() {
		return $this->belongsToMany('App\Service')->withPivot('price');
	}

    public function skills() {
		return $this->belongsToMany('App\Skill');
	}

    public function sponsors() {
		return $this->belongsToMany('App\Sponsor');
	}

    static public function generateSlug($originalStr) {
        $baseSlug = Str::of($originalStr)->slug('-');
        $slug = $baseSlug;
        $_i = 1;
        while(self::where('slug', $slug)->first()) {
            $slug = "$baseSlug-$_i";
            $_i++;
        }
        // dd($slug);
        return $slug;
    }
}
