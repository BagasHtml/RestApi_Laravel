<?php

namespace Database\Factories;

use App\Models\Data;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Symfony\Component\Clock\now;

/**
 * @extends Factory<Model>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'created_at' => now(),
        ];
    }
}
