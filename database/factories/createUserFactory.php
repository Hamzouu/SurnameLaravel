<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\createUser>
 */
class createUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'useEmail' => $this->faker->email,
            'usePassword' => $this->faker->password,
            'created_at' => now()
        ];
    }
}
