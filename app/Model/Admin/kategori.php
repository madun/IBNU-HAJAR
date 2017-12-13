<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function barang(){
      return $this->hasMany('App\Model\Admin\barang');
    }
}
