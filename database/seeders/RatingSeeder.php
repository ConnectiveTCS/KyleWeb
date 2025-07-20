<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Rating::factory()->count(50)->create();
        // You can adjust the count as needed
        // This will create 50 ratings with random data using the RatingFactory
        // Ensure that the RatingFactory is properly defined to generate realistic data
        // If you want to create specific ratings, you can modify the factory or create them manually
        // Example: \App\Models\Rating::factory()->create(['user_id' => 1, 'project_id' => 1, 'rating' => 5, 'comment' => 'Excellent service!']);
        // This will create a single rating with specific attributes
        // Adjust the attributes as necessary to fit your requirements
        // You can also use the RatingFactory to create ratings with specific relationships, like user and project
        // Example: \App\Models\Rating::factory()->for(\App\Models\User::find(1), 'user')
        // ->for(\App\Models\Project::find(1), 'project')
        // ->create(['rating' => 4, 'comment' => 'Good experience overall.']);
        // This will create a rating associated with a specific user and project
        // Adjust the user and project IDs as necessary to fit your database setup
        // Remember to run the seeder using the command: php artisan db:seed --class=RatingSeeder
        // This will execute the run method and create the ratings in your database
        // Ensure that your database is properly set up and the migrations have been run before seeding
        // If you encounter any issues, check the database connection and the RatingFactory definition
        // You can also use the --force option to run the seeder in production environments
        // Example: php artisan db:seed --class=RatingSeeder --force
        // This will force the seeder to run even in production, so use it with caution
        // Always back up your database before running seeders in production to avoid data loss
    }
}
