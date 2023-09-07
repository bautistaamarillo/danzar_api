<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //falta el student_id que no se como asignarlo ( de la relacion ) sin faker
            'date' => fake()->date('Y_m_d'),
            'invoice_number' => fake()->randomNumber(7, true),
            
        ];
    }
}
