
@extends('layouts.backend')
@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/stylesLoginRegister.css') }}" rel="stylesheet">
<link href="{{ asset('css/stylesPanelAdmin.css') }}" rel="stylesheet">
@endsection
@section ('content')
<div id="panelAdmin">
<h2>Listado de Productos</h2>
<ul>
  <li><a href="#tableMachines" id='button-machine'>Máquinas</a></li>
  <li><a href="#tableCapsules" id='button-capsule'>Cápsulas</a></li>
</ul>
</div>
<section id="tableMachines">
<table class="table">
  <h3>Máquinas</h3>
  <a href="{{url('/agregarMaquina')}}" class="btn btn-primary button">Agregar máquina</a>

  <thead>
    <tr class="header">
      <th scope="col">#</th>
      <th scope="col">Nombre de la Máquina</th>
      <th scope="col">Descripción</th>
      <th scope="col">Imagen</th>
      <th scope="col">Color</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($machines as $maquina)
      <tr>
        <th scope="row">{{$maquina->id}}</th>
        <td>{{$maquina->name}}</td>
        <td>{{$maquina->description}}</td>
        <td><img src="{{Storage::url($maquina->image)}}" alt="" class="imageMachine"></td>
        <td>{{$maquina->color}}</td>
        <td>{{$maquina->price}}</td>
        <td>{{$maquina->stock}}</td>
        <td>
          <form class="" action="/editarMaquina/{{$maquina->id}}" method="get">

            <button type="submit" class="btn btn-warning">Editar</button>
          </form>

          {{-- <form class="" action="{{ url('/editarMaquina/{{$maquina->id}}') }}" method="get">

            <button type="submit" class="btn btn-warning">Editar</button>
          </form> --}}
        </td>
        <td>
          <form class="" action="/borrarMaquina" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$maquina->id}}">
            <button type="submit" class="btn btn-danger">x</button>
          </form>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>
{{$machines->links()}}
</section>


<section id="tableCapsules">
<table class="table">
  <h3>Cápsulas</h3>
  <a href="{{url('/agregarCapsula')}}" class="btn btn-primary button">Agregar cápsula</a>

  <thead>
    <tr class="header">
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
      @foreach ($capsules as $capsula)
      <tr>
        <th scope="row">{{$capsula->id}}</th>
        <td>{{$capsula->name}}</td>
        <td>{{$capsula->description}}</td>
        <td><img src="{{Storage::url($capsula->imageCapsule)}}" alt="" class="imageCapsule"></td>
        <td>{{$capsula->flavor}}</td>
        <td>{{$capsula->price}}</td>
        <td>{{$capsula->stock}}</td>
        <td>
          <form class="" action="/editarCapsula/{{$capsula->id}}" method="get">

            <button type="submit" class="btn btn-warning">Editar</button>
          </form>
        </td>
        <td>
          <form class="" action="/borrarCapsula" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$capsula->id}}">
            <button type="submit" class="btn btn-danger">x</button>
          </form>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>
{{$capsules->links()}}
</section>

<script src="{{url('js/panelAdmin.js')}}"></script>

@endsection
