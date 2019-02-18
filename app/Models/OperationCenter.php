<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationCenter extends Model
{
    protected $table        = 't102_mm_operations_center';
    protected $primaryKey   = 'f102_mm_id_op';

    public function regional()
    {
        return $this->belongsTo(Regional::class,'f102_mm_id_regional');
    }

    public function Warehouses()
    {
        return $this->hasMany(Warehouse::class,'f154_mc_id_op');
    }

}
