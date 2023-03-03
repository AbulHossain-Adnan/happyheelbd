<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $availablelocal=['en','bn'];
        $local=session('APP_LOCALE');
        $local=in_array($local, $availablelocal) ? $local: config('app.locale');
        App()->setlocale($local);
        return $next($request);
    }
}
