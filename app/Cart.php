<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public $table = "cart";
  public $guarded = [];

  public function machines()
  {
    return $this->belongsToMany(
      Machines::class,'cart_machine','cart_id','machines_id'
    );
  }

  public function capsules()
  {
    return $this->belongsToMany(Capsules::class,'cart_capsule','cart_id','capsules_id');
  }

  public function user()
  {
    return $this->belongsTo(User::class,'user_id');
  }

}
