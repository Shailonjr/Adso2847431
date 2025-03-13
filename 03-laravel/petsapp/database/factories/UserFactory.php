<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $gender = fake()->randomElement(['male','female']);
           

        $gender == 'male' ? $nombre=fake()->firstNameMale(): $nombre=fake()->firstNameFemale();

        return [
            'document' => fake()->unique()->randomNumber(8, true),
            'fullname' => $nombre .' '.fake()->lastName(),
            'gender' => $gender,
            'birthdate' => fake()->date(),
            'phone' => fake()->numerify('310#######'),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('1234'), // Contraseña fija en 1234
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
