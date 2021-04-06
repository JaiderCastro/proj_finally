@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
    

    <a href="{{ route('products.create') }}" class="btn btn-primary"> Crear </a>

    <table class="table table-dark table-striped mt-4">

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
                
            </tr>
        </thead>
        
        <tbody>
            <?php $num = 0; ?>
            @foreach ($products as $product)
            <?php $num++; ?>

             <tr>
                 <td>{{ $product->id }}</td>
                 <td>{{ $product->name }}</td>
                 <td>{{ $product->price }}</td>
                 <td>{{ $product->nameCategory }}</td>

                 <td>
                    <a href="{{ route('products.edit') }}" class="btn btn-info">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                 </td>
                 
                
                     
                 </td>
             </tr>
            
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop