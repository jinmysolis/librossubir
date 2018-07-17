@extends('layouts.myapp4')

@section('content')



<div class="container bg-white pt-5 pb-5 border border-info">
    <div class="row">
        <div class="col-6">
            @include('Img.form',['cover' => $cover, 'CodLibro' => $CodLibro,'nombre' => $nombre,'autor' => $autor,'ano' => $ano,'url' => '/Imagenes/'.$cover->id,'method'=> 'PUT'])
         </div>
        
    </div>
</div>
    
            
       

   
   



            
       


@endsection