<?php

namespace App\Model\User;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $primaryKey = 'n_noidentitas';
    //
    // protected $fillable = [
    //     'id', 'n_noidentitas', 'n_anggota', 'c_lahirkelurahan', 'd_lahir', 'c_jenkel', 'c_goldarah', 'c_agama', 'c_status', 'c_warganegara', 'c_pekerjaan', 'i_almtkelurahan', 'i_almtdesc', 'i_almtrtrw', 'email', 'i_nohp', 'i_entry', 'd_entry',
    // ];
    //
    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //
    public function saham(){
      return $this->hasOne('App\Model\Admin\saham');
    }
}
