<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table        = 't010_rg_states';
    protected $primaryKey   = 'f010_rg_id_state';

    public function country()
    {
        return $this->belongsTo(Country::class,'f010_rg_id_state');
    }

    public function cities()
    {
        return $this->hasMany(City::class,'f011_rg_id_city');
    }
}
