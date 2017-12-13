<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class subkategori extends Model
{
  public function barang(){
    return $this->hasMany('App\Model\Admin\barang');
  }
}
