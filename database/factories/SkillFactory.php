<?php

namespace Database\Factories;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
             $faker = FakerFactory::create();

        return [
            // Define attributes and how to generate values using Faker methods
            'name' => $faker->unique()->name,
           
            'progress' => $faker->randomDigit + 1, // Random 5-digit number
            // ... (Add more attributes and their definitions)
        
        ];
    }
}
