<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
//        $this->call(ProjectSeeder::class);
//        $this->call(TaskSeeder::class);
//        $this->call(CustomerSeeder::class);
        Model::reguard();

    }
}
