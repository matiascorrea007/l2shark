<?php

namespace Soft\Http\Middleware;

use Closure;
use Cookie;
use Config;
use DB;
use App\User;
use Auth;
use Session;
use Soft\web_email;

class setEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         if(web_email::first() != null){ 

        $email = web_email::first();
        Config::set('mail.username', $email->email);
        Config::set('mail.password', $email->password);


        return $next($request);

    }else{ 

         return $next($request);
        
    }
    }
}
