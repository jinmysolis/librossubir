 {!! Form::open(['url' => $url, 'method' => $method, 'files'=>'true']) !!}
  
 
 
 <div class="form-group">
        {{ Form::text('CodLibro',$CodLibro->CodLibro,['class' => 'form-control', 'placeholder'=> 'CodLibro...'])}}
        
        
                                @if ($errors->any())
                                    @foreach ($errors->get('CodLibro') as $error)
                                    <div>{{$error}}</div>
                                    @endforeach
                                @endif
                        
</div>
 
  <div class="form-group">
        {{ Form::text('nombre',$nombre->nombre,['class' => 'form-control', 'placeholder'=> 'nombre...'])}}
                             @if ($errors->any())
                                    @foreach ($errors->get('nombre') as $error)
                                    <div>{{$error}}</div>
                                    @endforeach
                                @endif
                        
  </div>

  <div class="form-group">
        {{ Form::text('autor',$autor->autor,['class' => 'form-control', 'placeholder'=> 'autor...'])}}
                             @if ($errors->any())
                                    @foreach ($errors->get('autor') as $error)
                                    <div>{{$error}}</div>
                                    @endforeach
                                @endif
                        
  </div>


  <div class="form-group">
        {{ Form::text('ano',$ano->ano,['class' => 'form-control', 'placeholder'=> 'año...'])}}
                             @if ($errors->any())
                                    @foreach ($errors->get('ano') as $error)
                                    <div>{{$error}}</div>
                                    @endforeach
                                @endif
                        
  </div>


  <div class="form-group">
        {{ Form::file('cover',['class' => 'form-control', 'placeholder'=> 'subir Pdf...'])}}
                              @if ($errors->any())
                                    @foreach ($errors->get('cover') as $error)
                                    <div>{{$error}}</div>
                                    @endforeach
                                @endif
       
                        
</div>
 

              
                       <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
{!! Form::close() !!}
