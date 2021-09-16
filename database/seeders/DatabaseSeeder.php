<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);

        $this->call(CreateOrganizationsSeeder::class);
        $this->call(CreateAdminUserSeeder::class);

        //$this->call('PermissionTableSeeder');

        // \App\Models\User::factory(10)->create();
    }
}
