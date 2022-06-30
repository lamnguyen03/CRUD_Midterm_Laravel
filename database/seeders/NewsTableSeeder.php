<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('new')->insert([
                'title' => $faker->sentence,
                'image' => $faker->imageUrl,
                'description' => $faker->sentence,
                'date' => $faker->date,
                'author' => $faker->name
            ]);
        }
    }
}
