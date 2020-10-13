<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autok extends Model
{
    protected $table = 'autok';

    protected $fillable = ['autonev','uzemanyag','sebessegValto','elektromosAblakEmelo','klima','ara','kep'];

    public function Leiras()
    {
        return $this->belongsTo('App\AutokLeirasa','id','autok_id');
    }

}
