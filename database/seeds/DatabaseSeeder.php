<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role Comes before User seeder here
        $this->call(RoleTableSeeder::class);
        // User seeder will use the roles
        $this->call(UserTableSeeder::class);
    }
}
