<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class languageMiddleware
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
        if(session()->has('locale') && in_array(session()->get('locale'),config('language')))
        {

            app()->setLocale(session()->get('locale'));
            return $next($request);


        }
        else{
        return $next($request);
        }
    }
}
