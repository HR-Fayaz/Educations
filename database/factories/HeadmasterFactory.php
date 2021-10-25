<?php

namespace Database\Factories;

use App\Models\headmaster;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeadmasterFactory extends Factory
{
    protected $model = headmaster::class;

    public function definition(): array
    {
    	return [
            'firstname'=>$this->faker->firstName(),
            'lastname'=>$this->faker->lastName(),
            'telephone'=>$this->faker->numerify('###########')
    	];
    }
}
