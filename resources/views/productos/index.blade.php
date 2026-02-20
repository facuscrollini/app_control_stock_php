
@extends('layouts.app')

@section('content')
  <h1>  Lista de Productos en la base de datos</h1>
@foreach ($productos as $producto)

  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$producto->nombre}}</h5>
    <p class="card-text">{{$producto->descripcion}}</p>
    <a href="#" class="btn btn-primary">{{$producto->precio}}</a>
  </div>
</div>
@endforeach
  
@endsection