<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function menu() {
        return $this->hasMany('App\Menu');
    }

    public function openingHours() {
        return $this->hasOne('App\OpeningHours');
    }

    public function socialMedia() {
        return $this->hasOne('App\SocialMedia');
    }

    public function categories() {
        return $this->hasOne('App\Category');
    }
}
