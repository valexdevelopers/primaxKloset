<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('admin')->user()->isSuperAdmin()){
            return redirect()->route('admin.profile')->with('message', 'Unauthorized action! You are not a super Admin')->with('message-color', 'alert-danger');
        }
        return $next($request);
    }
}
