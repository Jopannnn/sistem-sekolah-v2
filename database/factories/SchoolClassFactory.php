<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class SchoolClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      $schoolClasses = [
            '10 AKL',
            '11 AKL',
            '12 AKL',
            '10 TKJ 1',
            '10 TKJ 2',
            '11 TKJ 1',
            '11 TKJ 2',
            '12 TKJ 1',
            '12 TKJ 2',
            '12 TKJ 3',
            '10 BiD 1',
            '10 BiD 2',
            '11 BiD',
            '12 Bid',
        ];

        return [
            'name' => fake()->unique()->randomElement($schoolClasses),
        ];
    }
}
