<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use Faker\Factory as Faker;
use App\Models\Writer as WriterModel;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         //inisialisasi faker dengan bahasa indonesia
        //  $faker = Faker::create('id_ID');

         //mengisi data dengan data fake sebanyak 20 untuk data post -> looping
        //  for($i=0; $i<2; $i++){
        //      WriterModel::create([
        //          'name' => $faker->sentence, //judul post bahasa indonesia
        //      ]);
        //  }

        // Writer::factory()->create([
        //     'specialization' => 'Spesialis Computer Science',
        // ]);

        // Writer::factory()->create([
        //     'specialization' => 'Spesialis Interactive Media',
        // ]);

        Writer::factory()->create([
            'name' => 'Jonathan Lawrencio',
            'specialization' => 'Spesialis Computer Science',
        ]);

        Writer::factory()->create([
            'name' => 'Lawrencio Jonathan',
            'specialization' => 'Spesialis Interactive Media',
        ]);
        
    }
}
