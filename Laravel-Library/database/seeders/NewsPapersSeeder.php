<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\NewsPapers;

class NewsPapersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++){
           NewsPapers::create([
            'title'=> $faker->sentence(2),
            'publisher'=> $faker->name(),
            'publicationDate'=> $faker->date(),
            'editor'=> $faker->name(),
            'language'=> $faker->languageCode(),
            'pageCount'=> $faker->numberBetween(5,20),
           ]);
        }
   
    }
}
