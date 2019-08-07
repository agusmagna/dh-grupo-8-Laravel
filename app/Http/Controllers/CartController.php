<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addMachine(Request $request){


      return view('cart');
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
