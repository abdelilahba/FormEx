<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LocaleMiddleware
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
        // Skip locale setting for specific cases
        if ($this->shouldSkipLocaleSetting($request)) {
            return $next($request);
        }

        // Extract the first segment of the URI as the locale
        $locale = $request->segment(1);

        // Check if the locale is supported
        if (in_array($locale, ['ar', 'fr'])) {
            App::setLocale($locale);
            Session::put('direction', $locale === 'ar' ? 'rtl' : 'ltr');
        } else {
            // Redirect to default locale if necessary
            return redirect('/ar' . $request->getPathInfo());
        }

        return $next($request);
    }

    /**
     * Determine if the locale setting should be skipped.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldSkipLocaleSetting(Request $request): bool
    {
        // Examples of patterns or attributes to identify requests that should skip locale setting
        return $request->is('api/*') || // API routes
               $request->is('livewire/*') || // Livewire routes
               $request->ajax() || // AJAX requests
               $request->expectsJson(); // Requests that expect a JSON response
    }
}
