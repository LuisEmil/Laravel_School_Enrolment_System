<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class StudentRecordsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_year' => $this->faker->year(),
            'semester' => $this->faker->randomElement(['1st', '2nd']),
            'grade_level' => $this->faker->randomElement(['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10', 'Grade 11', 'Grade 12']),
            'section' => $this->faker->word(),
            'adviser' => $this->faker->name(),
            'strand' => $this->faker->randomElement(['STEM', 'HUMSS', 'ABM', 'GAS']),
            'status' => $this->faker->randomElement(['enrolled', 'not enrolled', 'completed', 'dropped', 'transferred']),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid']),
            'total_amount' => 800.00,
        ];
    }
}
