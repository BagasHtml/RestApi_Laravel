<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->name(),
            'berat_barang' => $this->faker->randomFloat(2, 0.1, 100),
            'tinggi_barang' => $this->faker->randomFloat(2, 0.1, 200),
            'barang_tersedia' => $this->faker->randomElement(['ya', 'tidak']),
            'lokasi_gudang' => fake()->address(),
        ];
    }
}
