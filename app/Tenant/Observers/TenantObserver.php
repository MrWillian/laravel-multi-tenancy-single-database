<?php

namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;
use App\Tenant\ManagerTenant;

class TenantObserver {
  public function creating(Model $model) {
    $tenant = app(ManagerTenant::class)->identify();

    $model->setAttribute('tenant_id', $tenant);
  }
}