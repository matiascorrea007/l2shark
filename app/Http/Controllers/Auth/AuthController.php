<?php

namespace Soft\Http\Controllers\Auth;

use Soft\User;
use Soft\Account;
use Validator;
use Soft\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Soft\Cliente;


use Alert;
use Session;
use Redirect;
use Storage;
use DB;
use Image;
use Auth;
use Flash;
use Toastr;
use Carbon\Carbon;
use Exception;
use MP;
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


        //con esto validamos que el login no se encuentre retido en la DB del servidor
        $login = DB::connection('externa')->table('accounts')->where('login','=',$data['login'])->get();
       
         if (!empty($login)) {

            $reglas = array(
                    'login-en-uso' => 'required',
                );
                
        
            $messages = array(
                'login-en-uso.required' => 'El Login Ya se encunetra en uso o no Ingreso un Login Valido.'
                );

            return Validator::make($data, $reglas, $messages); 
        }



        return Validator::make($data, [
            'login' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'g-recaptcha-response' => 'required',

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
       

       
       
           
           DB::connection('externa')->table('accounts')->insert([
            'login' => $data['login'], 
            //'email' => $data['email'],
            'password' => base64_encode(pack('H*', sha1($data['password'])))]);

            $user = User::create([
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            're_password' =>$data['password_confirmation'],
            ]);


        return $user;

        
            
         
    }
}
