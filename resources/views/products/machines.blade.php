@extends('layouts.frontend')

@section('headScript')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/stylesProducts.css')}}">
@endsection


@section('content')
<div class="productsList">


  @foreach($products as $product)
  <div class="product">


  <div class="card" style="width: 18rem;">
    <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <!-- <img src="{{Storage::url($product->image)}}" alt=""> -->
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <a href="#" class="btn btn-primary">Agregar al carrito</a>
    </div>
  </div>
  </div>
  @endforeach

</div>
@endsection

@section('finalScript')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
