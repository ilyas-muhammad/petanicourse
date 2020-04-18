<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penulis';

    public function blog()
    {
        return $this->hasMany('App\Blog');
    }
}
