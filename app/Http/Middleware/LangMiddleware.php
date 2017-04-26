<?php

namespace Soft\Http\Middleware;

use Closure;

class LangMiddleware
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

        /*Estamos preguntando por una variable de sesión llamada “lang”, si esta existe,
         usaremos el valor de la misma (“en” – “es”) para indicar el idioma que se va a utilizar. 
         En caso de que dicha variable de sesión no exista, la aplicación usará por defecto el 
         idioma definido en el archivo app/config/app.php*/
         if (!empty(session('lang'))) {
            \App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
