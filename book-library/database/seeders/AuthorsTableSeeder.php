<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'J.K. Rowling',
                'bio' => 'British author, best known for the Harry Potter series.',
            ],
            [
                'name' => 'George R.R. Martin',
                'bio' => 'American novelist and short story writer, best known for A Song of Ice and Fire.',
            ],
            [
                'name' => 'J.R.R. Tolkien',
                'bio' => 'English writer, poet, and academic, known for The Lord of the Rings.',
            ],
            [
                'name' => 'Haruki Murakami',
                'bio' => 'Japanese writer, known for Kafka on the Shore and Norwegian Wood.',
            ],
            [
                'name' => 'Isabel Allende',
                'bio' => 'Chilean writer, best known for The House of the Spirits.',
            ]
        ]);
    }
}
