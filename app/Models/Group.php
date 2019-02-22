<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table        = 't151_mc_groups';
    protected $primaryKey   = 'f151_mc_id_group';

    public function categories()
    {
        return $this->hasMany(Category::class,'f152_mc_id_group');
    }

    public function company()
    {
        return $this->belongsTo(Company::class,'f151_mc_id_company');
    }
}
