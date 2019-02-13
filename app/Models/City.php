<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table        = 't011_rg_city';
    protected $primaryKey   = 'f011_rg_id_city';

    public function state()
    {
        return $this->belongsTo(State::class,'f011_rg_id_city');
    }
}
