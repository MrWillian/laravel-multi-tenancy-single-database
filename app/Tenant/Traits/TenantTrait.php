<?php

namespace App\Tenant\Traits;

use App\Tenant\Scopes\TenantScope;
use App\Tenant\Observers\TenantObserver;

trait TenantTrait {
  public static function boot() {
    parent::boot();
    static::addGlobalScope(new TenantScope);
    static::observe(new TenantObserver);
  }
}