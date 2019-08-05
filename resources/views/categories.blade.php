@extends('layouts.frontend')

@section('headScript')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/stylesCategories.css')}}">
@endsection

@section('content')
  <section class="categorias">
    <!-- <h1>Selecciona la categoría</h1> -->
    <div class="options">

      <div class="option">
        <a href="{{url('/products/machines')}}">
          <img src="{{asset('images/maquinaDibujo.png')}}" alt="">
          <h2>Máquinas</h2>
        </a>
      </div>
      <div class="option">
        <a href="{{url('/products/capsules')}}">
            <img src="{{asset('images/capsulaDibujo.png')}}" alt="" class="capsule">
            <h2 class="capsule-title">Cápsulas</h2>
        </a>
      </div>

    </div>
  </section>
@endsection

@section('finalScript')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
