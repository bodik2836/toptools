<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Illuminate\Support\Facades\Route;

class HandleInertiaRequests extends Middleware
{

    protected $externalRootViewList = [
        'landing',
        'admin',
    ];

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            //
        ]);
    }

    // public function handle(Request $request, Closure $next)
    // {
    //     $route = Route::currentRouteName();
    //     if (in_array($route, $this->externalRootViewList)) {
    //         $this->rootView = "external";
    //     }

    //     return parent::handle($request, $next);
    // }
}
