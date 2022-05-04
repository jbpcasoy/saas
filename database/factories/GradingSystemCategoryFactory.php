<?php

namespace Database\Factories;

use App\Models\GradingSystem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GradingSystemCategory>
 */
class GradingSystemCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'percentage' => $this->faker->randomFloat(1, 1, 100),
            'grading_system_id' => GradingSystem::all()->random()->id
        ];
    }
}