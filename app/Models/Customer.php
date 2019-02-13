<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table        = 't111_mm_customers';
    protected $primaryKey   = 'f111_mm_id_customer';

    public function person()
    {
        return $this->belongsTo(Person::class,'f111_mm_id_person');
    }

}
