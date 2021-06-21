<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    protected $table = 'biaya';
    protected $fillable = ['id_biaya', 'jenis', 'biaya'];
    public $timestamps = false;
}
