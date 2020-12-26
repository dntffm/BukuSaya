<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [ "title","author","publisher","price","images",
    "stock"];
    public function category()
    {
        return $this->belongsToMany('App\Category');
    }
}
