<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => '', // Kosongkan terlebih dahulu, akan diisi di seeder
            'content' => fake()->paragraph(2, true), // Menggunakan Faker untuk paragraf acak
            'writer_id' => Writer::factory(), // Mengaitkan dengan penulis yang dihasilkan
            'category_id' => Category::factory(),
        ];
    }
}
