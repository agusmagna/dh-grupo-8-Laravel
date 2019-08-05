@extends('layouts.frontend')



@section('content')
<img src="{{Storage::url($capsulas->find(10)->imageCapsule)}}" alt="">
@endsection
