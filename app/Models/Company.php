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

}
