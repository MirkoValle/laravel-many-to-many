<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = [
            [
                'nome' => "htmlcss-discord",
                'info' => "Struttura simile a Discord",
                'url_repo' => "https://github.com/MirkoValle/htmlcss-discord",
            ],
            [
                'nome' => "html-css-boolando",
                'info' => "Struttura simile a zalando",
                'url_repo' => "https://github.com/MirkoValle/html-css-boolando",
            ],
            [
                'nome' => "html-css-spotifyweb",
                'info' => "Struttura simile a Spotify Web",
                'url_repo' => "https://github.com/MirkoValle/html-css-spotifyweb",
            ],
            [
                'nome' => "js-campominato-dom",
                'info' => "Gioco del campominato",
                'url_repo' => "https://github.com/MirkoValle/js-campominato-dom",
            ],
            [
                'nome' => "vue-boolzapp",
                'info' => "Layout simil funzionante di Whatsapp",
                'url_repo' => "https://github.com/MirkoValle/vue-boolzapp",
            ],
            [
                'nome' => "vite-yu-gi-oh ",
                'info' => "Pagina di ricerca carte yu-gi-oh",
                'url_repo' => "https://github.com/MirkoValle/vite-yu-gi-oh",
            ],
            [
                'nome' => "vite-boolflix",
                'info' => "Web App di Ricerca fil/serie tv simile a Netflix",
                'url_repo' => "https://github.com/MirkoValle/vite-boolflix",
            ],
            [
                'nome' => "php-todo-list-json",
                'info' => "Todo list funzionante",
                'url_repo' => "https://github.com/MirkoValle/php-todo-list-json",
            ],
            [
                'nome' => "laravel-comics",
                'info' => "Pagina home per comics",
                'url_repo' => "https://github.com/MirkoValle/laravel-comics",
            ],
            [
                'nome' => "laravel-base-crud",
                'info' => "Sito di una riserva di animali",
                'url_repo' => "https://github.com/MirkoValle/laravel-base-crud",
            ],
            ];

            $type = Type::all()->pluck("id");

            foreach ($projects as $project) {
                $newProject = new Project();
                $newProject->type_id = $faker->randomElement($type);
                $newProject->nome = $project["nome"];
                $newProject->info = $project["info"];
                $newProject->url_repo = $project["url_repo"];
                $newProject->save();
            }
    }
}