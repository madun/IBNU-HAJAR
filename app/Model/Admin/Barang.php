<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
// use App\Model\Admin\kategori;

class Barang extends Model
{
    public function kategori(){
      return $this->belongsTo('App\Model\Admin\kategori');
    }

    public function subkategori(){
      return $this->belongsTo('App\Model\Admin\subkategori');
    }

    public function itemkategori(){
      return $this->belongsTo('App\Model\Admin\itemkategori');
    }
}
