<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
  public $table = "machines";
  public $guarded = [];


  public function carts()
  {
    return $this->belongsToMany(Cart::class,'cart_machine','machines_id','cart_id');
  }
}
