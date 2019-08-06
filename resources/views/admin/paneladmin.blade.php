
@extends('layouts.frontend')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/stylesLoginRegister.css') }}" rel="stylesheet">
@endsection
@section ('content')
<h2>Listado de Productos</h2>
<ul>
  <li><a href="#tableMachines">Máquinas</a></li>
  <li><a href="#tableCapsules">Cápsulas</a></li>
</ul>



<section id="tableCapsules">
<table class="table">
  <thead>
    <h3>Cápsulas</h3>
    <a href="{{url('/agregarCapsula')}}" class="btn btn-primary">Agregar cápsula</a>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de la Cápsula</th>
      <th scope="col">Descripción</th>
      <th scope="col">Imagen</th>
      <th scope="col">Sabor</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($productosCapsulas as $capsula)
      <tr>
        <th scope="row">{{$capsula->id}}</th>
        <td>{{$capsula->name}}</td>
        <td>{{$capsula->description}}</td>
        <td>{{$capsula->imageCapsule}}</td>
        <td>{{$capsula->flavor}}</td>
        <td>{{$capsula->price}}</td>
        <td>{{$capsula->stock}}</td>
        <td>
          <form class="" action="index.html" method="post">

            <button type="submit" class="btn btn-warning">Editar</button>
          </form>
        </td>
        <td>
          <form class="" action="index.html" method="post">

            <button type="submit" class="btn btn-danger">x</button>
          </form>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>
</section>

@endsection
