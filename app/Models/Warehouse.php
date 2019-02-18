<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{

    protected $table        = 't154_mc_warehouses';
    protected $primaryKey   = 'f154_mc_id_warehouse';

    public function OperationsCenter()
    {
        return $this->belongsTo(OperationCenter::class,'f154_mc_id_op');
    }

}
