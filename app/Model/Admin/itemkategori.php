<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class itemkategori extends Model
{
  public function barang(){
    return $this->hasMany('App\Model\Admin\barang');
  }
}
