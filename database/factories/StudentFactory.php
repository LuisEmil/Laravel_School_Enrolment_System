<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory()->create()->id,
            'LRN' => $this->faker->randomNumber(5),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'sex' => $this->faker->randomElement(['male', 'female']),
            'date_of_birth' => $this->faker->date(),
            'place_of_birth' => $this->faker->city(),
            'address' => $this->faker->address(),
            'last_school_attended' => $this->faker->company(),
            'father_name' => $this->faker->name(),
            'mother_name' => $this->faker->name(),
            'guardian_name' => $this->faker->name(),
            'guardian_address' => $this->faker->address(),
            'contact_number' => $this->faker->randomNumber(9),
        ];
    }
}
