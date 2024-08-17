<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['name' => 'Author 1', 'bio' => 'Bio of Author 1'],
            // Add more authors
        ]);
    }
    
}
