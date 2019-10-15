<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = [
        'name','image','username','fname','lname','mobile','tahsilat','address','email',
    ];
}
