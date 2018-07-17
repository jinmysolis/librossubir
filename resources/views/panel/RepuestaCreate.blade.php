@extends('layouts.myapp4')

@section('content')



<div class="container bg-white pt-5 pb-5 border border-info">
    <div class="row">
        <div class="col-6">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/respuestasUno') }}">
                        {{ csrf_field() }}
                        

              <div class="text-left"><label for="RespuestasUno" >Repuestas Uno</label></div>
                        <div class="form-group{{ $errors->has('RespuestasUno') ? ' has-error' : '' }}">
                             <div class="col-md-12">
                                 <input id="RespuestasUno" type="text" class="form-control" name="RespuestasUno" value="{{ old('RespuestasUno') }}" required placeholder="Respuestas Uno">

                                @if ($errors->has('RespuestasUno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RespuestasUno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
             </form>
         </div>
        
    </div>
</div>
    
            
       

   
   



            
       


@endsection