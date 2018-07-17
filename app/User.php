<?php

namespace App;
use App\Empresa;
use App\Pempresa;
use App\Empleo;
use App\Formacion;
use App\Experiencia;
use App\Conocimiento;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'email_confirm', 'recibirCorreo','password','password_confirmation','seguridad1','rseguridad1','seguridad2','rseguridad2','seguridad3','rseguridad3', 'nombres', 'apellidos','fechaNacimiento','direccion','pais', 'provincia', 'ciudad','codigoPostal','telefono', 'idioma','recibirsms','politicas', 'avatar'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
//    public function empresas()
//    {
//        return $this->hasMany(Empresa::class);
//    }
//    
//    public function empleos()
//    {
//        return $this->hasMany(Pempresa::class);
//    }
//    
//    public function curriculum()
//    {
//        return $this->hasMany(Empleo::class);
//    }
//    
//    public function formacion()
//    {
//        return $this->hasMany(Formacion::class);
//    }
//    
//    public function experiencias()
//    {
//        return $this->hasMany(Experiencia::class);
//    }
//    
//    public function conocimientos()
//    {
//        return $this->hasMany(Conocimiento::class);
//    }
}
