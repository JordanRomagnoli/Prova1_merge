<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\videogame;

class VideogameSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        videogame::truncate();
        
        for ($i = 0; $i < 5; $i++) {
            $videogame = new videogame();

            $videogame->title = fake()->sentence;
            $videogame->description = fake()->paragraph;
            $videogame->thumb = fake()->imageUrl;
            $videogame->price = fake()->randomFloat(6,2);
            $videogame->save();
        }
    }
}
