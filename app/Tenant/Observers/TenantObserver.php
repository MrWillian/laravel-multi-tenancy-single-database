<?php

namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;
use App\Tenant\ManagerTenant;

class TenantObserver {
  public function creating(Model $model) {
    if (app()->runningInConsole()) {
      return;
    }

    $tenant = app(ManagerTenant::class)->identify();

    $model->setAttribute('tenant_id', $tenant);
  }
}