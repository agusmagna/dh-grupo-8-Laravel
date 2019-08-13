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
    <p>Nombre: {{$user->first_name}}</p>
    <p>Apellido: {{$user->last_name}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Número de teléfono: {{$user->phone_number}}</p>
    <a href="{{url('/profileEdit')}}">Editar perfil</a>
  </div>


</div>

@endsection
