<?php

namespace Database\Factories;

use App\Models\course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = course::class;

    public function definition(): array
    {
    	return [
            'title'=>$this->faker->name(),
            'units_number'=>$this->faker->randomDigit()
        ];
    }
}
