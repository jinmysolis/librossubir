<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link href="{{url('/css/app.css')}}" rel="stylesheet">

  <link href="css/font-awesome.min.css" rel="stylesheet">
   
    
</head>
<body>
<div class="container-fluid">
    <div class="row">
        
   <div class="logo">
      <img src="img/banner_cabecera-01.png" alt="">
    <section class="menu-section"> 
                
                <nav id="single-nav" class="single-nav menu" role="navigation">
                    <ul>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registro</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Ayuda</a></li>
                        
                        
                    </ul>
                </nav><!-- #single-nav .single-nav -->
                
                <nav id="nav-icon" class="single-nav menu" role="navigation">
                    <ul>
                        <li><a href="#"><img src="img/icono1.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icono2.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icono3.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icono4.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icono5.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icono6.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icono7.png" alt=""></a></li>
                        
                        
                        
                        
                    </ul>
                </nav><!-- #single-nav .single-nav -->
                
    </section><!-- menu-section -->
     
</div>
  
  <nav id="menu-principal" class="single-nav menu" role="navigation">
                    <ul>
                        <li><a href="#">Inico</a></li>
                        <li><a href="#">Instituto</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Programas</a></li>
                        <li><a href="#">Admision</a></li>
                        <li><a href="#">Campus virtual</a></li>
                        <li><a href="#">Certificados</a></li>
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Actualidad</a></li>
                        <li><a href="#">Gente</a></li>
                        <li><a href="#">Soporte</a></li>
                        
                        
                    </ul>
   </nav>
    
    <div class="container">
    <div class="row">
    
            <section>
              
                @yield('content')

            </section>

    </div>
   </div> 
   
  
  
  
  
  
  
   
   <footer>
       <nav id="menu-principal" class="single-nav menu" role="navigation">
                    <ul>
                        <li><a href="#">Copyright 2017</a></li>
                        <li><a href="#">Business Skills Training Institute</a></li>
                        <li><a href="#">Todos los derechos reservados</a></li>
                        <li><a href="#">Politicas de privacidad y Terminos dee uso</a></li>
                        <li><a href="#">Referidos</a></li>
                        <li><a href="#">Contactos</a></li>
                        
                    </ul>
        </nav>
       
   </footer>
    
    
    
 </div></div>   
</body>
</html>