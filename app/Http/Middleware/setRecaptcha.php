<?php

namespace Soft\Http\Middleware;

use Closure;
use Cookie;
use Config;
use DB;
use App\User;
use Auth;
use Session;
use Soft\Recaptcha;

class setRecaptcha
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
         if(Recaptcha::first() != null){ 

        $Recaptcha = Recaptcha::first();
        Config::set('recaptcha.public_key', $Recaptcha->public_key);
        Config::set('recaptcha.private_key', $Recaptcha->private_key);


        return $next($request);

    }else{ 

         return $next($request);
        
    }
    }
}
