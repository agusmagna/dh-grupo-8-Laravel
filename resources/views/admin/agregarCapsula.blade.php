@extends('layouts.backend')
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

                        <ul class="" style="color:red">
                          @foreach($errors->all() as $error)
                            <li>
                              {{$error}}
                            </li>
                          @endforeach
                        </ul>

                          <form method="POST" action="/agregarCapsula" enctype="multipart/form-data">
                              @csrf

                              @include('admin.formCapsulas')

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
