<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Book Title 1',
                'author_id' => 1, 
                'year' => 2020,
                'genre' => 'Fiction',
                'rating' => 4.5,
            ],
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'author_id' => 1,  
                'year' => 1997,
                'genre' => 'Fantasy',
                'rating' => 4.9,
            ],
            [
                'title' => 'A Game of Thrones',
                'author_id' => 2,  
                'year' => 1996,
                'genre' => 'Fantasy',
                'rating' => 4.8,
            ],
            [
                'title' => 'The Fellowship of the Ring',
                'author_id' => 3, 
                'year' => 1954,
                'genre' => 'Fantasy',
                'rating' => 4.7,
            ],
            [
                'title' => 'Norwegian Wood',
                'author_id' => 4,  
                'year' => 1987,
                'genre' => 'Literary Fiction',
                'rating' => 4.5,
            ],
            [
                'title' => 'The House of the Spirits',
                'author_id' => 5, 
                'year' => 1982,
                'genre' => 'Magical Realism',
                'rating' => 4.6,
            ]
        ]);
    }
}
