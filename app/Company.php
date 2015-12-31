<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
        'website',
        'briefIntro',
        'internPos',
        'numberOfStudentNeeded',
        'address',
        'email',
        'representative'
    ];

    public function users() {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
