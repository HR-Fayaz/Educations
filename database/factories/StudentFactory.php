<?php

namespace Database\Factories;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = student::class;

    public function definition(): array
    {
    	return [
            'sid'=>$this->faker->numerify('###########'),
            'lastname'=>$this->faker->firstName(),
            'firstname'=>$this->faker->lastName(),
            'grade'=>$this->faker->numerify('#')
    	];
    }
}
