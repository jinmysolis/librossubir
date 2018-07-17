@extends('layouts.myapp4')

@section('content')




    


<button type="button" class="btn btn-primary btn-lg btn-block mt-5" onClick="history.back()">Volver atras</button>

<div class="text-center">

 <button type="button" class="btn btn-primary mt-5 ">
  total de click <span class="badge badge-light text-center ">{{$variable->total_visitas}}</span>
</button>
            
</div> 
      







@endsection