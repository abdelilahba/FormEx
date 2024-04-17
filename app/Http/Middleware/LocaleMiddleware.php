<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);

        if (in_array($locale, ['ar', 'fr'])) {
            App::setLocale($locale);
            Session::put('direction', $locale === 'ar' ? 'rtl' : 'ltr');
        } else {
            // If the locale is not supported, you might want to redirect or just proceed without setting locale.
            // This scenario should ideally not happen if routes are structured correctly.
        }

        return $next($request);
    }
}


