<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    protected $fillable=[
      'id','name','user_id','accept','context',
    ];
}
