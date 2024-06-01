<?php

namespace Database\Factories;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Message;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
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
            'name' => $faker->name,
            'email' => $faker->safeEmail,
            'subject' => $faker->sentence(), 
            'message'=>$faker->paragraph(),
            // Random 5-digit number
            // ... (Add more attributes and their definitions)
        
        ];
    }
}
