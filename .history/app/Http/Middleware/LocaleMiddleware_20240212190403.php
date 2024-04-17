<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        // Default language is set to Arabic
        $locale = 'ar';

        // Check if the first segment of the URL is 'fr' for French
        if ($request->segment(1) === 'fr') {
            $locale = 'fr';
        }

        // Set the Laravel application locale
        App::setLocale($locale);

        return $next($request);
    }
}
