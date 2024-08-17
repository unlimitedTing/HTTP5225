<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        'title' => 'Book Title 1',
        'author_id' => 1,  // Replace this with the correct author ID from your authors table
        'year' => 2020,
        'genre' => 'Fiction',
        'rating' => 4.5,
    ]);
    
}
}
