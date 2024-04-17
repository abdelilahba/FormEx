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
            // Set the direction based on the locale
            $direction = $locale === 'ar' ? 'rtl' : 'ltr';
            Session::put('direction', $direction);
        } else {
            // If no locale or an unsupported locale is found in the URL, default to Arabic
            App::setLocale('ar');
            Session::put('direction', 'rtl');
            return redirect('/ar' . $request->getPathInfo());
        }

        return $next($request);
    }
}
