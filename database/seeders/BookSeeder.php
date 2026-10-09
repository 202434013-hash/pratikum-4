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
            'isbn' => '9780544003415',
            'available' => true,
        ]);

        \App\Models\Book::create([
            'title' => '1984',
            'isbn' => '9780451524935',
            'available' => false,
        ]);
    }
}
