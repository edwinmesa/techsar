<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $table        = 't005_us_users';
    protected $primaryKey   = 'f005_us_id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'f005_us_nic', 'f005_us_fname', 'f005_us_user','f005_us_email','f005_us_phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'f005_us_password', 'remember_token',
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class,'f005_us_id_profession');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class,'f005_us_id_rol');
    }

    public function area()
    {
        return $this->belongsTo(Area::class,'f005_us_id_area');
    }

    public function active()
    {
        return $this->belongsTo(Active::class,'f005_us_id_active');
    }
}
