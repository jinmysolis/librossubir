 {!! Form::open(['url' => $url, 'method' => $method]) !!}
 <div class="form-group">
        {{ Form::url('Link',$Link->Link,['class' => 'form-control', 'placeholder'=> 'links...'])}}
                        
</div>
              
                       <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
            {!! Form::close() !!}

            
 