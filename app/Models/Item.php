<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table        = 't153_mc_items';
    protected $primaryKey   = 'f153_mc_id_item';

    public function category()
    {
        return $this->belongsTo(Category::class,'f153_mc_id_category');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'f153_mc_id_brand');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class,'f153_mc_id_provider');
    }

    public function ItemsCost()
    {
        return $this->hasOne(CostItem::class,'f005_us_id_area');
    }

}
