<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id','recipient','address','phone'];

    public function book()
    {
        return $this->belongsToMany('App\Book','book_transactions');
    }
}
