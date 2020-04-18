<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table = "murid";

    public function waliMurid()
    {
        return $this->hasOne('App\WaliMurid');
    }
}
