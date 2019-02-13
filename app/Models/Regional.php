<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $table        = 't101_mm_regional';
    protected $primaryKey   = 'f101_mm_id_regional';

    public function company()
    {
        return $this->belongsTo(Company::class,'f101_mm_id_company');
    }

    public function operationsCenter()
    {
        return $this->hasMany(OperationCenter::class,'f102_mm_id_regional');
    }

}
