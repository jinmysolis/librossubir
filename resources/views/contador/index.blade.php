@extends('layouts.myapp4')

@section('content')




    



  

  <span class="d-block p-2 bg-primary mb-5 text-white">logo</span>
            
<div class="d-flex flex-wrap flex-fill justify-content-center">
    @foreach($contador as $contador)
  
 
  <div class="card border border-dark" style="width: 18rem;">
  <div class="card-body">
      
    
      </div></h5>
   
    <p class="card-text text-center">{{$contador->contador}}.</p>
    <p class="card-text text-center">{{$contador->count()}}.</p>
    
      <a href="{{ url('/contador',$contador->id) }}" class="btn btn-primary ">contador</a>
            
    
  </div>
    @endforeach 
</div>
  
      







@endsection