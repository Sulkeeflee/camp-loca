<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeederd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            \DB::table('products')->insert([
                'title' => $faker->sentence,
                'description' => $faker->sentence,
                'catagory' => $faker->word,
                'image' => $faker->imageUrl(800, 600, 'cats'),
                'quantity' => $faker->randomNumber(2),
                'price' => $faker->randomFloat(2, 10, 100),
                'discount' => $faker->numberBetween(0, 50),
                // Add more columns and fake data as needed
            ]);
        }
    }
}
