<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>businessskills</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="{{url('/css/app.css')}}" rel="stylesheet">
</head>
<body>
   <div class="container-fluid">
       <div class="row">
   <section class="menu-section"> 
              
               <div class="img-menu">
                   <img src="img/banner_cabecera-01.png" alt="">
                </div>
                
                
                
                <nav id="single-nav" class="single-nav menu" role="navigation">
                    @if (Auth::guest())
                    <ul>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registro</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Ayuda</a></li>
                         
                    </ul>
                    <div class="redes-soc">
                                    <a href=""><img src="img/icono1.png" alt=""  class="img-responsive"></a>
                                    <a href=""><img src="img/icono2.png" alt="" class="img-responsive"></a>
                                    <a href=""><img src="img/icono3.png" alt="" class="img-responsive"></a>
                                    <a href=""><img src="img/icono4.png" alt="" class="img-responsive"></a>
                                    <a href=""><img src="img/icono5.png" alt="" class="img-responsive"></a>
                                    <a href=""><img src="img/icono6.png" alt="" class="img-responsive"></a>
                                    <a href=""><img src="img/icono7.png" alt="" class="img-responsive"></a>
                                     
                                
                     </div>
                     @else
                      <div id="salir">
                             <h1>{{ Auth::user()->name }} </h1>
                                 <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar session
                                        </a>
                                       <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> </div>
                            
                        @endif       
                </nav><!-- #single-nav .single-nav -->
            </section><!-- menu-section -->

   
   
   
   <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
		</div>
 
		<nav>
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
	</header>
   <div class="container-fluid">
    <div class="row">
    
            <section>
              
                @yield('content')

            </section>

    </div>
   </div> 
   
   
   
   
   
   
   


<footer>
       <nav id="menu-footer" role="navigation">
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


   </div>
   </div> 
   
   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/menu.js"></script>
</body>

</html>