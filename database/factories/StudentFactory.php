<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'dni' => fake()->unique()->numberBetween(1000000,40000000),
            'phone_number' => fake()->unique()->phoneNumber(),
            'birthdate' => fake()->date(),
            'activo' => fake()->numberBetween(0, 1)
        ];
    }
}
