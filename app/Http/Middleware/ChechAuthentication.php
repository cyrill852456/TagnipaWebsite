<?php

namespace App\Http\Middleware;
use RealRashid\SweetAlert\Facades\Alert;
use Closure;
use Illuminate\Http\Request;

class ChechAuthentication
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
        if(!Session()->has('MemberId')){
            Alert::error('You Need To Login First','No Access Eror 404');
            return redirect()->route('MemberLogin');
        }
        return $next($request);
    }
}
