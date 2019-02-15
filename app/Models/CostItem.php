<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CostItem extends Model
{
    protected $table        = 't200_mvt_cost_items';
    protected $primaryKey   = 'f200_mvt_id_cost_item';

    public function item()
    {
        return $this->belongsTo(Item::class,'f153_mc_id_brand');
    }
}
