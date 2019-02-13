<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table        = 't003_us_areas';
    protected $primaryKey   = 'f003_us_id_area';

    public function users()
    {
        return $this->hasMany(User::class,'f005_us_id_area');
    }
}
