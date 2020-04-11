<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentor';

    protected $fillable = ['nama','umur', 'alamat'];

    public $timestamps = true;
}
