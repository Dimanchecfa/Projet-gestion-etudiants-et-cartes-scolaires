<?php

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

        //middleware qui protege les routes destines au directeur
         if(Gate::allows("directeur")){
            return $next($request);
        }
        //si les routes ne sont pas destines a l'utilisateur xa le redirige vers la page d'acceuil
        return redirect()->route("home");

    }
}
