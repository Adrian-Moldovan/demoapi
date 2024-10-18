<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                "name"  => "Suzanne Collins"
            ],
            [
                "name"  => "J.K. Rowling"
            ],
            [
                "name"  => "Jane Austen"
            ],
            [
                "name"  => "Harper Lee"
            ],
            [
                "name"  => "Markus Zusak"
            ],
            [
                "name"  => "Stephenie Meyer"
            ],
            [
                "name"  => "George Orwell"
            ],
            [
                "name"  => "Antoine de Saint-Exupéry"
            ],
        ];

        foreach ($seeds as $seed) { 
            Author::create($seed);
        }
    }
}
