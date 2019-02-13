<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table        = 't152_mc_categories';
    protected $primaryKey   = 'f152_mc_id_category';

    public function group()
    {
        return $this->belongsTo(Group::class,'f152_mc_id_group');
    }

    public function items()
    {
        return $this->hasMany(Item::class,'f153_mc_id_category');
    }
}
