<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    $user = auth()->user();

    return view('profile', ['user'=>$user]);
  }

}
