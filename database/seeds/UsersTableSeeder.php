<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Tenant;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::first();
        $tenant->users()->create([
            'name' => 'Willian Marciel',
            'email' => 'williansoares102@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        
        // User::create([
        //     'tenant_id' => $tenant->id,
        //     'name' => 'Willian Marciel',
        //     'email' => 'williansoares102@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
    }
}
