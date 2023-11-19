<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call other seeders here if needed
        $this->call([
            CampgroundSeeder::class,
            ProductSeederd::class,
            UserSeeder::class,
            // Add more seeders as needed
        ]);
    }
}
