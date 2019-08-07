<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public $table = "cart";
  public $guarded = [];

  public function machines()
  {
      return $this->hasMany(Machines::class,'machines_id')
  }
  public function capsules()
  {
      return $this->hasMany(Capsules::class,'capsules_id')
  }

}
