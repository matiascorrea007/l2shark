<?php

namespace Soft\Http\Controllers\Auth;

use Soft\User;
use Soft\Account;
use Validator;
use Soft\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Soft\Cliente;
use DB;
use Input;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'login-redirect';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
      //  $rules =  array('captcha' => ['required', 'captcha']); 

        $messages  = ['g-recaptcha-response' => 'El captcha ingresado es Incorrecto.' ];

        return Validator::make($data, [
            'login' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'g-recaptcha-response' => 'required|recaptcha',


        ],$messages);


   



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
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            're_password' =>$data['password_confirmation'],
        ]);

         DB::connection('externa')->table('accounts')->insert([
            'login' => $data['login'], 
            'email' => $data['email'],
            'password' => base64_encode(pack('H*', sha1($data['password'])))
            ]
        );

       
         


        return $user;
         
    }
}
