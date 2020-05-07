<?php

namespace App\Http\Middleware;

use App\Constants\UserMetatype;
use Closure;

class CheckEmployer
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
       
        if (session("user")["metatype"] != UserMetatype::EMPLOYER){
            return redirect('/');
        }
        
        return $next($request);
    }
}
