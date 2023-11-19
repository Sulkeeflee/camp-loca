<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class CampgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = User::first();

        foreach (range(1, 10) as $index) {
            \DB::table('campgrounds')->insert([
                'author' => $user->id,
                'location' => $faker->city . ', ' . $faker->state,
                'title' => $faker->word . ' ' . $faker->word,
                'description' => $faker->paragraph,
                'catagory' => $faker->word,
                'geometry' => json_encode([
                    'type' => 'Point',
                    'coordinates' => [
                        $faker->longitude,
                        $faker->latitude,
                    ],
                ]),
                'image' => $faker->imageUrl(),
            ]);
        }
    }
}















