 {!! Form::open(['url' => $url, 'method' => $method, 'files'=>'true']) !!}
  
 
 

  <div class="form-group">
        {{ Form::text('contador',$contador->contador,['class' => 'form-control', 'placeholder'=> 'contador...'])}}
                          @if ($errors->any())
                                    @foreach ($errors->get('contador') as $error)
                                    <div>{{$error}}</div>
                                    @endforeach
                                @endif
                        
</div>
 

              
                       <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
            {!! Form::close() !!}
