@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR  PRODUCTS</h1>
@stop

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action=" {{route('products.update', $product->id) }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="" class="form-label">Nombre del Producto</label>
        <input id="codigo" name="name" type="text" class="form-control" tabindex="1" value="{{$product->name}}">    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="descripcion" name="price" type="text" class="form-control" tabindex="2" value="{{$product->price}}">
      </div>
      
      <div class="mb-3">
        <label for="" class="form-label">Categorias</label>
        <select id="precio" name="category_id" type="number" step="any" value="0.00" class="form-control" tabindex="3">
            @foreach ($categories as $category)
             <option value="{{ $category->id }}" >{{ $category->name }} </option>
            @endforeach    
        </select> <br>

      <a href="/user/products" class="btn btn-secondary" tabindex="5">Cancelar</a> 
      <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
    </form> 
</body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop