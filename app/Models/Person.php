<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table        = 't110_mm_persons';
    protected $primaryKey   = 'f110_mm_id_person';

    public function customers()
    {
        return $this->hasMany(Customer::class,'f111_mm_id_person');
    }

    public function providers()
    {
        return $this->hasMany(Provider::class,'f112_mm_id_person');
    }

}
