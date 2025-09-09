<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'key' => fake()->unique()->slug(2),
            'value' => fake()->randomElement(['true', 'false', fake()->sentence(), fake()->numberBetween(1, 100)]),
        ];
    }

    /**
     * Indicate that the setting is for PPDB status.
     */
    public function ppdbStatus(): static
    {
        return $this->state(fn (array $attributes) => [
            'key' => 'ppdb_status',
            'value' => fake()->randomElement(['true', 'false']),
        ]);
    }

    /**
     * Indicate that the setting is enabled/true.
     */
    public function enabled(): static
    {
        return $this->state(fn (array $attributes) => [
            'value' => 'true',
        ]);
    }

    /**
     * Indicate that the setting is disabled/false.
     */
    public function disabled(): static
    {
        return $this->state(fn (array $attributes) => [
            'value' => 'false',
        ]);
    }
}