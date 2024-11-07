<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Cds;

class CdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++){
           Cds::create([
               'title' => $faker->sentence(3),
               'producer' => $faker->name(),
               'genre'=> $faker->randomElement(['Action', 'Drama', 'Comedy', 'Fantasy', 'Adventure', 'Mystery', 'Horror']), // Genre film, misalnya "Drama", "Aksi", "Komedi"
               'releaseYear'=> $faker->year(),
               'duration'=> $faker->numberBetween(60, 150), // Durasi film dalam menit
               'studio'=> $faker->word()
           ]);
        }
    
    }
}
