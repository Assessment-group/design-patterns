<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserRoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $attributes['name'] ?? $this->faker->randomElement(['Admin','Developer','Customer']);
        return [
            'name' => $status,
        ];
    }
}
