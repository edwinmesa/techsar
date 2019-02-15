<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table        = 't112_mm_providers';
    protected $primaryKey   = 'f112_mm_id_providers';

    public function person()
    {
        return $this->belongsTo(Person::class,'f112_mm_id_person');
    }

    public function items()
    {
        return $this->hasMany(Item::class,'f153_mc_id_provider');
    }

}
