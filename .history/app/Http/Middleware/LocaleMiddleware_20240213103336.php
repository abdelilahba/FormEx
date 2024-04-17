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
            // Redirect to the default locale if the current locale in URL is unsupported
            return redirect('/ar' . $request->getPathInfo());
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
        $authRoutes = ['login', 'register', 'forgot-password', 'reset-password', 'logout','dashboard', "listcus", "activate-customer","deactivate-customer","profile.complete","listpayement","listinvoice","submit-form",];

        // Check if the current path starts with any of the authentication routes
        foreach ($authRoutes as $route) {
            if ($request->is($route) || $request->is("$route/*")) {
                return true;
            }
        }

        return false;
    }
}
