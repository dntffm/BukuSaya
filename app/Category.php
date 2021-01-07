<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["category_name"];
    public function book()
    {
        return $this->belongsToMany('App\Book');
    }

    public function scopeCategoryName($query,$name)
    {
        return $query->where('category_name',$name);
    }
}
