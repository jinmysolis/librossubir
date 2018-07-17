@extends('layouts.myapp4')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="panel panel-default">
                <div class="panel-heading  text-center"><div class="display-4"> Iniciar session</div> <a href="{{ url('/register') }}"><h2>Register</h2></a></div>
                <div class="panel-body">
                    
            
                    
                    <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                         <label for="email" class="col-md-4 control-label">Correo Electrónico</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           <label for="password" class="col-md-4 control-label">Contraseña</label>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      
                       
                      <div class="form-group">
                            <div class="col-md-6 mx-auto">
                                
                                 <button type="submit" class="btn btn-danger mt-5">
                                   Inicie session
                                 </button>
                            </div>
                        </div>
                           
                           

                        <div class="form-group">
                            <div class="col-md-6 mx-auto">
                                
                                <a class="btn btn-link mt-5" href="{{ url('/password/reset') }}">
                                    Olvido su contraseña
                                </a>
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
