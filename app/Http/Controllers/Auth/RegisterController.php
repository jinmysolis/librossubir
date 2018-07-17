<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
           
            'password' => 'required|string|min:6|confirmed',
            
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            
            
            
        ]);
        
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        
    
            $user = User::create([
             'email' => $data['email'],
             'password' => bcrypt($data['password']),
             'password_confirmation' => $data['password_confirmation'],
            
           
             
              
        ]);
            
            
           
       
       
       
        return $user;
       
    }
    
    
    
//    public function redirectPath()
//    {
//        if (auth()->user()->tipoCuenta == 'personal') {
//            return '/home';
//        }else
//
//        return  '/homeEmpresa';
//    }
    
    
}
