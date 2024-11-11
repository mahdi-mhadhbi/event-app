<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Migrations;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
