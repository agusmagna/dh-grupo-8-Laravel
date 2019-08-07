@extends('layouts.frontend')

@section('headScript')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/stylesProducts.css')}}">
@endsection


@section('content')
<div class="contenedor">


<h1 class='title'>Elije tus cápsulas</h1>
  <div class="buscador">
    <form class="" action="{{url('/capsulesSearch')}}" method="get">
      <label for="quest"><h5>¿Qué producto buscás?</h5></label>
      <input type="text" name="quest" value="">
      <button class="btn btn-primary">Encuentra mi producto</button>
    </form>
  </div>
    @if($products->isEmpty())
    <p class='productoNoEncontrado'>Ups! No hemos encontrado ningún producto con ese nombre</p>
    @endif
  <div class="productsList">
  @foreach($products as $product)
  <div class="product">
    <div class="image">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{Storage::url($product->imageProduct)}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{Storage::url($product->imageCapsule)}}" alt="Second slide">
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="description">
      <h5 class="">{{$product->name}}</h5>
      <p class="">$ {{$product->price}}</p>
      <div class="botones">
        <a href="#" class="btn btn-primary detailButton">Ver detalle</a>
        <a href="{{url('/cart/addcapsule')}}" class="btn btn-primary">Agregar al carrito</a>
      </div>
    </div>
  </div>
  <div class='detail'>
    @include('partials/productDetails')
  </div>

  @endforeach

  </div>

  {{$products->links()}}

  <div class="verTodos">
    <a href="{{url('/products/capsules')}}" class="btn btn-primary">Ver todos los productos</a>
  </div>
</div>
@endsection

@section('finalScript')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{asset('js/products.js')}}"></script>
@endsection
