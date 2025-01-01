<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function definition(): array
    {
        return [
            'name'      => fake()->name(),
            'email'     => fake()->unique()->safeEmail(),
            'password'  => bcrypt('123'),
            'nik'       => date('Ymd').rand(000,999),
            'alamat'    => fake()->address(),
            'tlp'       => fake()->phoneNumber(),
            'role'      => rand(0,1),
            'tglLahir'  => fake()->date('Y-m-d','now'),
            'is_active' => 1,
            'is_mamber' => 0,
            'is_admin'  => 1,
=======
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
<<<<<<< HEAD
     */
    // public function unverified(): static
    // {
    //     // return $this->state(fn (array $attributes) => [
    //     //     'email_verified_at' => null,
    //     // ]);
    // }
=======
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
}
