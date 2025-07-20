<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kyle',
            'email' => 'admin@acewebdesign.co.za',
            'password' => bcrypt('Morgan146@'), // Ensure to use a secure password in production
        ]);
        // Call other seeders
        $this->call([
            ProjectSeeder::class,
            RatingSeeder::class,
            ContactSeeder::class,
            // Add other seeders here as needed
        ]);
    }
}
