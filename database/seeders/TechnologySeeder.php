<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologiesData = [
            [
                "nome" => "HTML",
                "colore" => "#E34C26"
            ],
            [
                "nome" => "CSS",
                "colore" => "#264DE4"
            ],
            [
                "nome" => "JavaScript",
                "colore" => "#F7DF1E"
            ],
            [
                "nome" => "PHP",
                "colore" => "#4F5B93"
            ],
            [
                "nome" => "Vue.js",
                "colore" => "#41B883"
            ],
            [
                "nome" => "Laravel",
                "colore" => "#FF2D20"
            ],
            [
                "nome" => "Python",
                "colore" => "#3776AB"
            ],
            [
                "nome" => "Ruby",
                "colore" => "#CC342D"
            ],
            [
                "nome" => "Java",
                "colore" => "#007396"
            ],
            [
                "nome" => "C++",
                "colore" => "#00599C"
            ],
            [
                "nome" => "C#",
                "colore" => "#239120"
            ],
            [
                "nome" => "Swift",
                "colore" => "#FA7343"
            ],
            [
                "nome" => "Kotlin",
                "colore" => "#0095D5"
            ],
            [
                "nome" => "R",
                "colore" => "#276DC3"
            ],
            [
                "nome" => "Go",
                "colore" => "#00ADD8"
            ],
            [
                "nome" => "Rust",
                "colore" => "#DEA584"
            ],
            [
                "nome" => "TypeScript",
                "colore" => "#3178C6"
            ],
            [
                "nome" => "Scala",
                "colore" => "#DC322F"
            ],
            [
                "nome" => "Perl",
                "colore" => "#0298C3"
            ],
            [
                "nome" => "Dart",
                "colore" => "#0175C2"
            ]
        ];

        foreach ($technologiesData as $technologyData) {
            Technology::create($technologyData);
        }
    }
}