<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'client_name' => $this->faker->company,
            'description' => $this->faker->text(200),
            'status' => $this->faker->randomElement(['pending', 'ongoing', 'completed']),
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'client_photo' => $this->faker->imageUrl(640, 480, 'people'),
            'client_logo' => $this->faker->imageUrl(200, 200, 'business'),
            'client_website' => $this->faker->url,
            'client_email' => $this->faker->email,
            'client_phone' => $this->faker->phoneNumber,
            'project_type' => $this->faker->word,
        ];
    }
}
