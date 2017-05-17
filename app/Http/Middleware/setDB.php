<?php

namespace Soft\Http\Middleware;

use Closure;
use Cookie;
use Config;
use DB;
use App\User;
use Auth;
use Session;
use Soft\web_conexion;


class setDB
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


        $informatica = web_conexion::first();

        Config::set('database.connections.externa.host', $informatica ->host);
        Config::set('database.connections.externa.username', $informatica ->user);
        Config::set('database.connections.externa.password', $informatica ->password);
        Config::set('database.connections.externa.database', $informatica ->db);
        DB::connection('externa');

        

        return $next($request);
    }
}