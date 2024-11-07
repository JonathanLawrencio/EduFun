<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article as ArticleModel;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create 
        $titles = [
            'Human and Computer Interaction',
            'User Experience',
            'User Experience for Digital Immersive Technology',
            'Pattern Software Design',
            'Agile Software Development',
            'Code Reengineering',
        ];

        // Ambil semua penulis yang ada
        $writer = Writer::all();

        foreach ($titles as $title) {
            Article::factory()->create([
                'title' => $title,
                'content' => fake()->paragraph(), // Menghasilkan satu paragraf acak untuk konten
                'writer_id' => $writer->random()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ]);
        }
       

       
       


         //inisialisasi faker dengan bahasa indonesia
        //  $faker = Faker::create('id_ID');

         //mengisi data dengan data fake sebanyak 20 untuk data post -> looping
        //  for($i=0; $i<2; $i++){
        //      //insert into Writer values('')
        //      ArticleModel::create([
        //          'content' => $faker->paragraph, //judul post bahasa indonesia
        //      ]);
        //  }
    }
}
