<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (in_array($locale, ['ar', 'fr'])) {
            App::setLocale($locale);
            Session::put('direction', $locale === 'ar' ? 'rtl' : 'ltr');
        } else {
            // Redirect if the locale is not supported, but only if it's part of the localized group.
            // Non-localized routes will not reach this middleware.
            return redirect('/ar');
        }

        return $next($request);
    }
}
