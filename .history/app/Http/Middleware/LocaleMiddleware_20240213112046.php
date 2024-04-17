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
        // Check if we should skip locale setting for this request
        if ($this->shouldSkipLocaleSetting($request)) {
            return $next($request);
        }

        // Extract the first segment of the URI as the locale
        $locale = $request->segment(1);

        // Check if the locale is supported
        if (in_array($locale, ['ar', 'fr'])) {
            App::setLocale($locale);
            // Set the direction based on the locale
            Session::put('direction', $locale === 'ar' ? 'rtl' : 'ltr');
        } else {
            // Redirect to default locale if the current locale is not supported
            // Ensure we're not in an infinite redirect loop
            if ($locale !== App::getLocale()) {
                return redirect('/ar' . $request->getPathInfo());
            }
        }

        return $next($request);
    }

    /**
     * Determine if the locale setting should be skipped for a given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldSkipLocaleSetting(Request $request): bool
    {
        // Define patterns or routes that should skip locale setting
        $skipPatterns = [
            'api/*',
            'livewire/message/*', // Specific pattern for Livewire requests
            'livewire/upload/*', // Specific pattern for Livewire file uploads
        ];

        foreach ($skipPatterns as $pattern) {
            if ($request->is($pattern)) {
                return true;
            }
        }

        return false;
    }
}
