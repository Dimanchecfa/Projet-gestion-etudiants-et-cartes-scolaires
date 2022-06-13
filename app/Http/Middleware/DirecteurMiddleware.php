<?php
//les middleware sont egalements des portails qui permettent de controler si
// le User authentifier a acces a une page ou une route
//En resume les middleware permet de securiser nos routes

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DirecteurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Gate::allows("directeur")){
            return $next($request);
        }
        return redirect()->route("home");

      
    }
}
