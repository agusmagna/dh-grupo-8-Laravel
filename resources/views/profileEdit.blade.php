@extends('layouts.frontend')

@section('css')
<link href="{{ asset('css/stylesProfile.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="titles">
  <h1>¡Hola {{$user->username}}!</h1>
  <h2>Bienvenido a Tigout</h2>
</div>

<div class="profileCard">
  <div class="image">
    <img src="{{Storage::url($user->avatar)}}" alt="">
  </div>
  <div class="info">
    <form class="" action="{{url('/profileEdit')}}" method="post">


      <p>Nombre:
        <input type="text" name="name" value="{{ old('first_name', $user->first_name)}}">
      </p>
      <p>Apellido:
        <input type="text" name="last_name" value="{{ old('last_name', $user->last_name)}}"></p>

      <p>Número de teléfono:
        <input type="text" name="phone_number" value="{{ old('phone_number', $user->phone_number)}}"></p>
      <button>Actualizar</button>
    </form>
  </div>


</div>

@endsection
