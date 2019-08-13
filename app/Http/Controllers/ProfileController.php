<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  public function index()
  {
    $user = auth()->user();

    return view('profile', ['user'=>$user]);
  }
  public function edit()
  {
    $user = auth()->user();

    return view('profileEdit', ['user'=>$user]);
  }

  public function update(Request $form)
    {
        $user = Auth::user();



        $user->first_name = $form['name'];
        $user->last_name = $form['last_name'];
        $user->phone_number =  $form['phone_number'];


        $user->update();

        return redirect('profile');
    }
}
