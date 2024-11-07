<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\FinalYearProjects;

class FinalYearProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++){
           FinalYearProjects::create([
            'title'=> $faker->sentence(6),
            'author'=> $faker->name(),
            'student_id'=> $faker->numerify('UCM-#####'),
            'department'=> $faker->randomElement(['IMT', 'VCD', 'MAN']),
            'year'=> $faker->year(),
            'abstract'=> $faker->text(150),
            'status'=> $faker->randomElement(['Lulus', 'Revisi', 'Ditolak']),
            'grade'=> $faker->randomElement(['A', 'A-', 'B+', 'B', 'B-', 'C+', 'C']),
           ]);
        }
    }
}
