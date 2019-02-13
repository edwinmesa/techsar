<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table        = 't002_us_rols';
    protected $primaryKey   = 'f002_us_id_rol';

    public function users()
    {
        return $this->hasMany(User::class,'f005_us_id_rol');
    }
}
