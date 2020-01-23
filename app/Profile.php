<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : '/profile/fh1VI8QM04plcLF7U0ClVVJTFapcNyIOo76hBfFn.jpeg';
        return '/storage/'.$imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
