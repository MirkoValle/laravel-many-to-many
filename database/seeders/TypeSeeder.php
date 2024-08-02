<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                "nome" => "Static",
                "colore" => "#0088ff",
            ],
            [
                "nome" => "Front-End",
                "colore" => "#d4c631",
            ],
            [
                "nome" => "Back-End",
                "colore" => "#3aab2b",
            ],
            [
                "nome" => "Full-Stack",
                "colore" => "#f75454",
            ],
            ];

            foreach ($types as $type) {
                $newType = new Type();
                $newType->nome = $type["nome"];
                $newType->colore = $type["colore"];
                $newType->save();
            }
    }
}