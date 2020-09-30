<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Students;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ;
        Students::factory()
                ->times(50)
                ->hasPosts(1)
                ->create();
    }
}
