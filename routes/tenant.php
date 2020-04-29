<?php

Route::get('/', function(){
  return 'Hello World';
});

Route::resource('/tenants', 'Tenant\\TenantController');
