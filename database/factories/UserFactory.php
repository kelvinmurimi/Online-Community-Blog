<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function configure(){
        return $this->afterCreating(function(User $user){
            $user->assignRole('Admin');
        });

    }
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->name(),
            'slug' => Str::slug($this->faker->name()),
            'email' => $this->faker->safeEmail(),
            'password' => Hash::make('password'),
            'is_active' => 1,
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'image' => 'users/avatar.png',
            'two_fa_active' => 0,
        ];

    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
