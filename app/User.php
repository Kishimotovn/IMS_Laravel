<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'alternative_email',
        'role',
        'photo',
        'dob',
        'descriptions'

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function isAdmin()
    {
        if ($this->role == 1) { return true;}
        else {return false;}

    }

    public function companies() {
        return $this->belongsToMany('App\Company')->withTimestamps();
    }
}
