<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table        = 't001_us_professions';
    protected $primaryKey   = 'f001_us_id_profession';

    public function users()
    {
        return $this->hasMany(User::class,'f005_us_id_profession');
    }
}
