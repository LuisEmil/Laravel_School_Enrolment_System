<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory()->create([            
                'email' => 'admin1@gmail.com',
                'email_verified_at' => now(),
                'role' => 'admin',
                'password' => static::$password ??= Hash::make('123456'),
                'remember_token' => Str::random(10) ]),
            'first_name' => 'Administrator',
            'middle_name' => 'Tech',
            'last_name' => 'Lead',
            'position' => 'Administrator',
        ];
    }
}
