<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaliMurid extends Model
{
    protected $table = 'wali_murid';

    public function murid()
    {
        return $this->belongsTo('App\Murid');
    }
}
