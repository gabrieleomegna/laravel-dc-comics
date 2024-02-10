<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $comics = config('db.comics');

       foreach ($comics as $comic) {
        $newComic = new Comic();
        $newComic->title = $comic['title'];
        $newComic->description = $comic['description'];
        $newComic->thumb = $comic['thumb'];
        $newComic->price = $comic['price'];
        $newComic->series = $comic['series'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->type = $comic['type'];
        $newComic->writers = '';
        $newComic->artists = '';
        // for ($i=0; $i < count($comic['writers']); $i++) { 
        //     $newComic->writers = $comic['writers'][$i];
        //     }
        // for ($i=0; $i < count($comic['artists']); $i++) { 
        //     $newComic->artists = $comic['artists'][$i];
        // }
        $newComic->save();
       }
    }
}
