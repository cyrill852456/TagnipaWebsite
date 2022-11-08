<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoginAuth
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
        if(Session()->has('MemberId') && (url('member-login')==$request->url() || url('member-registration')==$request->url()
        || url('/')==$request->url() || url('tutorialvideos')==$request->url()))
        {
            return back();
        }
        return $next($request);
    }
}
