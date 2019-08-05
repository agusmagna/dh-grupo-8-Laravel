@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Agregar un producto nuevo:') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/agregarProducto" enctype="multipart/form-data">
                            @csrf
                    <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right"> {{ __('Categoría:') }} </label>

                      <div class="col-md-6">
                        <select id="category" type="text" class="form-control @error('source_referral') is-invalid @enderror" name="category" value="{{ old('category') }}" autocomplete="category" autofocus>>
                          <option value="" disabled selected>Seleccione una categoría</option>
                          <option value="maquina" >Máquinas</option>
                          <option value="maquina" >Cápsulas</option>
                        @error('category')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                        </select>

                      </div>
                    </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Producto:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción:') }}</label>

                        <div class="col-md-6">
                            <textarea name="description" rows="8" cols="80" class="form-control @error('description') is-invalid @enderror"></textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagen:') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file"  name="image">

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio:') }}</label>

                        <div class="col-md-6">
                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="flavor" class="col-md-4 col-form-label text-md-right">{{ __('Sabor:') }}</label>

                    <div class="col-md-6">
                        <input id="flavor" type="text" class="form-control @error('name') is-invalid @enderror" name="flavor" value="{{ old('flavor') }}" required autocomplete="flavor" autofocus>

                        @error('flavor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
