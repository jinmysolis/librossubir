@extends('layouts.myapp4')

@section('content')


    
            
<div class="container bg-white pt-5 pb-5 border border-info">
    <div class="row">
        <div class="col-6">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        
                        
                        
                        
                        
                        
                       
                        
                         <div class="text-left"><label for="email" >Correo Eletronico</label></div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <div class="col-md-12">
                                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ingresa tu correo">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                       
                          
                      
                          <br>
                         
                          <div class="text-left"><label for="email-confirm" >Contraseña</label>  </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            <div class="col-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="text-left"><label for="email-confirm" >Confirma contraseña</label>  </div>
                        <div class="form-group">
                            
                            <div class="col-12">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <hr>
                         
                         
                       
                            
                       
                       
                       
                            
                            
                        
                           
                
                       
                       
                      
        
                       
                            
                            
                             
                            
                            
                           
                            
                            
      
                              
                         

                    
        </div>
        
        
       
                        
                         
                        <div class="" >    
                          
                         <button type="submit" class="btn btn-primary btn-lg btn-block">Crear mi cuenta</button>
                            
                       </div> 
                            
                            
                            
                            
                            
                            
                            
                            
                       
                             
                              
                         

                   
            
        </div>
         </form>
        
        
    </div>
</div>
    
   
   
        
         
                    
        
    
  
    



@endsection
