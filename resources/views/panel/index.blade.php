@extends('layouts.myapp4')

@section('content')



            
   
<span class="d-block p-2 bg-primary mb-5 text-white">Libros</span>
<a href="{{ url('/Imagenes/create') }}" class="btn btn-success float-right btn-lg mb-3">Crear</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cod Libro</th>
      <th scope="col">Nombre</th>
      <th scope="col">Autor</th>
      <th scope="col">Año</th>
      <th scope="col">Pdf</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cover as $cover)
    <tr>
      <th scope="row">{{$cover->id}}</th>
      <td>{{$cover->CodLibro}}</td>
      <td>{{$cover->nombre}}</td>
      <td>{{$cover->autor}}</td>
      <td>{{$cover->ano}}</td>
      <td><a href="{{url("/Imagenese/$cover->id.$cover->extension")}}" target="_blank">pdf</a></td>
      <td><a href="{{url('/Imagenes/'.$cover->id.'/edit')}}" class="btn btn-outline-warning btn-sm">Editar</a>
      
    
      @include('Img.delete',['cover' => $cover])
      
      </td>
      
    </tr>
    @endforeach 
  </tbody>
</table>








@endsection