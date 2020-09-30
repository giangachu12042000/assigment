<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory ;
use Illuminate\Support\Str;

class StudentsFactory extends Factory
{
    protected $model = Students::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'age'=>$this->faker->numberBetween(10,80),
            'address'=>$this->faker->address,
            'gender'=>$this->faker->numberBetween(0,1),
            'is_active'=>$this->faker->numberBetween(0,1),
        ];
    }
}
