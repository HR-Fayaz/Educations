<?php

namespace Database\Factories;

use App\Models\school;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    protected $model = school::class;

    public function definition(): array
    {
    	return [
    	    'city'=>$this->faker->city(),
            'name'=>$this->faker->name(),
            'address'=>$this->faker->address(),
            'telephone'=>$this->faker->numerify('###########')
    	];
    }
}
