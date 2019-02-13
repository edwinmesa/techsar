<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $table        = 't004_us_active';
    protected $primaryKey   = 'f004_us_active_id';

    public function users()
    {
        return $this->hasMany(User::class,'f005_us_id_active');
    }

}
