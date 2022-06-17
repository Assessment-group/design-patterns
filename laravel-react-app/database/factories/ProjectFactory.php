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
        Customer::factory()->make();
        return [
            'title' => $this->faker->jobTitle(),
            'user_id' => User::factory(),
            'description' => $this->faker->text,
            'status' => $this->faker->randomElement(['To Do','In Progress','Done']),
            'company_name' => $this->faker->company,
            'deadline' => $this->faker->dateTime,
            'customer_id' => Customer::factory(),
        ];
    }
}
