<!DOCTYPE html>

<html lang="es">
    <hed>
        <meta charset="UTF-8">
        <title>Mesajae recibido</title>
    </hed>
    
    <body>
        <h1>Nuevo usuario registrado</h1>
        <h2>correo usuario registrado: {{$msg['email']}}</h2>
        <h2>Recibir correos de Quinteros&Asociados: {{$msg['recibirCorreo']}}</h2>
        <h2>Contraseña: {{$msg['password']}}</h2>
        <hr>
        <h2>Pregunta de seguridad 1:   {{$msg['seguridad1']}}</h2>
        <h2>Respuesta de seguridad 1:  {{$msg['rseguridad1']}}</h2>
        <hr>
        <h2>Pregunta de seguridad 2:   {{$msg['seguridad2']}}</h2>
        <h2>Respuesta de seguridad 2:  {{$msg['rseguridad2']}}</h2>
        <hr>
        <h2>Pregunta de seguridad 3: {{$msg['seguridad3']}}</h2>
        <h2>Respuesta de seguridad 3: {{$msg['rseguridad3']}}</h2>
        <hr>
        <h2>Nombres usuario registrado: {{$msg['nombres']}}</h2>
        <h2>Apellidos usuario registrado: {{$msg['apellidos']}}</h2>
        <hr>
        <h2>Fecha de nacimiento usuario registrado: {{$msg['fechaNacimiento']}}</h2>
        <h2>Direccion usuario registrado: {{$msg['direccion']}}</h2>
        <hr>
        <h2>Pais usuario registrado: {{$msg['pais']}}</h2>
        <h2>Provincia usuario registrado: {{$msg['provincia']}}</h2>
        <h2>Ciudad usuario registrado: {{$msg['ciudad']}}</h2>
        <hr>
        <h2>Codigo postal usuario registrado: {{$msg['codigoPostal']}}</h2>
        <h2>Telefono usuario registrado: {{$msg['telefono']}}</h2>
        <h2>Idioma usuario registrado: {{$msg['idioma']}}</h2>
         <hr>
         <h2>Recibir sms: {{$msg['recibirsms']}}</h2>
        <h2>Aceptar politicas: {{$msg['politicas']}}</h2>
       
        
        
             
            
            
        
        
    </body>
</html>