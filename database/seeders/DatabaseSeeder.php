<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Students;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Students::factory(10)->create();
        // Subject::factory(20)->create();
    }
}
