<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table        = 't150_mc_brands';
    protected $primaryKey   = 'f150_mc_id_brand';

    public function items()
    {
        return $this->hasMany(Item::class,'f153_mc_id_brand');
    }
}
