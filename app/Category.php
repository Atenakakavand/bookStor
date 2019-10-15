<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name', 'parent_id'];


    public function getParent()
    {
        return $this->hasOne('App\Category', 'id', 'parent_id')->withDefault(['name'=>'---']);
    }

    public function getChild()
    {
        return $this->hasMany('App\Category','parent_id');
    }

    public function book()
    {
        return $this->hasOne(book::class);
    }

   /* public function books()
    {
        return $this->belongsToMany(book::class);
    }*/
}
