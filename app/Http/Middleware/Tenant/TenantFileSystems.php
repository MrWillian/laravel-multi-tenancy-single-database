<?php

namespace App\Http\Middleware\Tenant;

use Closure;

class TenantFileSystems
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
        $uuid = session('tenant')['uuid'];

        config()->set([
            'filesystems.disks.public.root' => config('filesystems.disks.public.root') . "/{$uuid}",
            'filesystems.disks.public.url' => config('filesystems.disks.public.root') . "/{$uuid}"
        ]);

        return $next($request);
    }
}
