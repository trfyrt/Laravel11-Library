<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Journals;

class JournalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++){
           Journals::create([
               'title' => $faker->sentence(3),
               'author' => $faker->name(),
               'publisher'=> $faker->name(),
               'year'=> $faker->year(),
           ]);
        }
   
    }
}
