<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (!in_array($locale, ['ar', 'fr'])) {
            // If the locale is not set, redirect to the default locale 'ar'
            return redirect('/ar');
        }

        // Set the Laravel application locale
        App::setLocale($locale);

        return $next($request);
    }
}
