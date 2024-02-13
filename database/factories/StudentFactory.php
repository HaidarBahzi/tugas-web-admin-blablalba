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
            'nis' => random_int(10000000,99999999),
            'nama' => fake()->name(),
            'alamat' => fake()->address(),
            'kelas_id' => fake()->numberBetween(1,6),
            'tgl_lahir' => fake()->date(),
        ];
    }
}
