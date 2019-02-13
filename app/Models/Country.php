<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table        = 't009_rg_countries';
    protected $primaryKey   = 'f009_rg_id_country';

    public function states()
    {
        return $this->hasMany(State::class,'f010_rg_id_state');
    }

}
