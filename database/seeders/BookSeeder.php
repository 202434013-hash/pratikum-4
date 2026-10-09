<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Book::create([
            'title' => 'The Lord of the Rings',
            'author' => 'J.R.R. Tolkien',
            'description' => 'A fantasy novel.',
            'published_year' => 1954,
        ]);

        \App\Models\Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'description' => 'Dystopian social science fiction novel and cautionary tale.',
            'published_year' => 1949,
        ]);
    }
}
