<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = $request->user();
    
        if(is_null($user)) {
            return redirect()->route('id.login');
        }
    
        if(!$user->hasRole($role)) {
            return redirect()->route('chatter.home');
        }
        
        return $next($request);
    }
}
