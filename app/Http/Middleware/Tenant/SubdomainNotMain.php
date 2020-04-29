<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Tenant\ManagerTenant;

class SubdomainNotMain
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
        $managerTenant = app(ManagerTenant::class);

        if($managerTenant->isSubdomainMain()) {
            abort(401);
            return;
        }

        return $next($request);
    }
}
