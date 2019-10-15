<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class book extends Model
{
    use Sluggable;
    protected $table = 'books';
    protected $fillable = [
        'name','slug','auther','pname','pyear','category_id','lshn','abstract','image','pdf'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /*public function categories()
    {
    return $this->belongsToMany(Category::class);
 }*/

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function pathSlug()
    {
        return url('/')."/single/$this->slug";
    }
}

