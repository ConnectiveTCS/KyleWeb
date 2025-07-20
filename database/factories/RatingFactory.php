<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => \App\Models\User::factory(),
            'project_id' => \App\Models\Project::factory(),
            'client_name' => $this->faker->name(),
            'business_name' => $this->faker->company(),
            'client_photo' => $this->faker->imageUrl(640, 480, 'people', true, 'client'),
            'business_photo' => $this->faker->imageUrl(640, 480, 'business', true, 'business'),
            'project_name' => $this->faker->sentence(3),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
