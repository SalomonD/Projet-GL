<?php

namespace App\Http\Middleware;

use Closure;
use App\Actionnaire;

class isActionnaire
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
       if(Actionnaire::find($request->matricule)==null){
           return redirect('index');
       }
        return $next($request);
    }
}
