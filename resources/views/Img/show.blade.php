@extends('layouts.myapp4')

@section('content')




    



  @foreach($cover2 as $cover2)
  
 
 
    
<span class="d-block p-2 bg-primary mb-5 text-white"><div class="mr-5 "><h1>{{$cover2->titulo}}<img class="img-fluid mr-5 ml-5 logo" src="{{url("/Imagenese2/$cover2->id.$cover2->extension")}}" ></h1></div></span>
    
  
 @endforeach 

    

   

  


            
<div class="d-flex flex-wrap flex-fill justify-content-center">
    @foreach($cover as $cover)
  
 
  <div class="card border border-dark" style="width: 18rem;">
  <div class="card-body">
      
    <h5 class="card-title">  <a class="ancchoalto" href="{{$cover->ur}} " target="_blank"> <img class="img-fluid" src="{{url("/Imagenese/$cover->id.$cover->extension")}}" ></a>
      </div></h5>
   
    <p class="card-text text-center">{{$cover->titulo}}.</p>
<!--     <a href="{{ url('/Imagenes',$cover->id) }} " class="btn btn-primary">leer mas</a>-->
<!--     <a href="{{$cover->ur}}" target="_blank"  class="card-link text-center">ir al sitio</a>-->

   <a href="javascript:void(0);" class="btn btn-primary" onclick="javascript:window.open('{{$cover->ur}}', '_blank'); window.open('{{ url('/Imagenes',$cover->id) }}', '_self'); ">Ir al sitio</a>
    
  </div>
    @endforeach 
</div>
  
      



      







@endsection