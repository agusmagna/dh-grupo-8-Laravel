<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cart;
use \App\Machines;
use \App\Capsules;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addMachine(Request $request, $id){
      $userId = Auth::user()->$id;
      $cart = Cart::where('user_id','=',$userId)->where('status', '=', 'pending')->first();
      dd($cart);
      if($cart === null){
        $cart = Auth::user()->carts()->create();
      }

      $machine = Machines::find($id);
      $cart->machines()->attach($machine);
      return view('products/cart', ['cart' => $cart]);
    }
    public function addCapsule(Request $request){
      var_dump($request);
      return view('cart');
    }
    public function deleteCapsule(Request $request){
      return view('cart');
    }
    public function deleteMachine(Request $request){
      return view('cart');
    }
}
