<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExcludeLocalePrefixForAuthRoutes
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
        $shouldExclude = $this->shouldExcludeFromLocalePrefix($request);

        if ($shouldExclude) {
            return $next($request);
        }

        // Assuming 'ar' is your default locale
        $defaultLocale = 'ar';
        $locale = $request->segment(1);

        if (!in_array($locale, ['ar', 'fr'])) {
            return redirect("/$defaultLocale" . $request->getPathInfo());
        }

        return $next($request);
    }

    /**
     * Determine if the request route should be excluded from locale prefixing.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldExcludeFromLocalePrefix(Request $request): bool
    {
        $authRoutes = ['login', 'register', 'forgot-password', 'reset-password', 'logout'];

        // Check if the current path starts with any of the authentication routes
        foreach ($authRoutes as $route) {
            if ($request->is($route) || $request->is("$route/*")) {
                return true;
            }
        }

        return false;
    }
}
