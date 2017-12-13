<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\User\User;

class saham extends Model
{
  protected $primaryKey = 'id';

  protected $table = 'sahams';

  public function user(){
    return $this->belongsTo(User::class);
  }
}
