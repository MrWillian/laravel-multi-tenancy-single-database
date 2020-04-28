<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Tenant\ManagerTenant;

class TenantMiddleware
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
        $tenant = $managerTenant->tenant();

        if (!$tenant && $request->url() != route('tenant.404')) {
            return redirect()->route('tenant.404');
        }

        $this->setSession($tenant->only('name'));

        return $next($request);
    }

    public function setSession($tenant) {
        session()->put('tenant', $tenant);
    }
}
