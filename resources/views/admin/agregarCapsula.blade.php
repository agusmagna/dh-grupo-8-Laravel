@extends('layouts.frontend')
@section('headScript')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('content')

    <div class="container contenedor-agregarCapsula">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Agregar una cápsula nueva:') }}</div>

                    <div class="card-body">
                      <ul class="errores" style="color:red">
                        @foreach($errors->all() as $error)
                          <li>
                            {{$error}}
                          </li>
                        @endforeach
                      </ul>
                      
                        <form method="POST" action="/agregarCapsula" enctype="multipart/form-data">
                            @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la Cápsula:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción:') }}</label>

                        <div class="col-md-6">
                            <textarea name="description" rows="8" cols="80" class="f"> </textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="imageCapsule" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Cápsula:') }}</label>

                        <div class="col-md-6">
                            <input id="imageCapsule" type="file"  name="imageCapsule">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="imageProduct" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Producto:') }}</label>

                        <div class="col-md-6">
                            <input id="imageProduct" type="file"  name="imageProduct">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio:') }}</label>

                        <div class="col-md-6">
                            <input id="price" type="text" class="" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="flavor" class="col-md-4 col-form-label text-md-right">{{ __('Sabor:') }}</label>

                    <div class="col-md-6">
                        <input id="flavor" type="text" class="" name="flavor" value="{{ old('flavor') }}" required autocomplete="flavor" autofocus>

                </div>
            </div>

                <div class="form-group row">
                    <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock:') }}</label>

                    <div class="col-md-6">
                        <input id="stock" type="text" class="" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Agregar') }}
                    </button>
                </div>
            </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
