<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        $user = $request->user();
        
        if(is_null($user)) {
            return redirect()->route('id.login');
        }
    
        if(!$user->hasRole('sudo') && !$user->hasPermission($permission)) {
            return redirect()->route('chatter.home');
        }
        
        return $next($request);
    }
}
