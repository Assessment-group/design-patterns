<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        this->faker->randomElement(['To Do','In Progress','Done'])
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->text,
            'company_name' => $this->faker->company,
            'status' => $this->faker->company,
            'deadline' => $this->faker->dateTime,
        ];

    }
}
