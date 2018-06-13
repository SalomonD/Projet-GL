<?php

namespace App\Http\Middleware;

use Closure;
use Config;

class isAdmin
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
        $username = Config::get('isAdmin.adminUsername');
        $passwd = Config::get('isAdmin.adminPassword');
        $bool = ($request->username==$username&&$request->passwd==$passwd);
        if(!$bool){
            redirect('index');
        }
        return $next($request);
    }
}
