<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table        = 't100_mm_companies';
    protected $primaryKey   = 'f100_mm_id_company';

    public function regional()
    {
        return $this->hasMany(Company::class,'f101_mm_id_company');
    }

    public function persons()
    {
        return $this->hasMany(Person::class,'f110_mm_id_company');
    }

    public function operationsCenter()
    {
        return $this->hasMany(OperationCenter::class,'f102_mm_id_company');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class,'f111_mm_id_company');
    }

    public function providers()
    {
        return $this->hasMany(Provider::class,'f112_mm_id_company');
    }

}
