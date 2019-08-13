<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capsules extends Model
{
  public $table = "capsules";
  public $guarded = [];

  public function cart()
  {
    return $this->hasMany(Cart::class, 'capsule_id');
  }
}
