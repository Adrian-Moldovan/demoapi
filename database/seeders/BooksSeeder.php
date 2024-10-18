<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeds = [
            [
                "name"          => "The Hunger Games",
                'publish_date'  => '2008-09-14'
            ],
            [
                "name"          => "Harry Potter and the Order of the Phoenix",
                'publish_date'  => '2003-06-21'
            ],
            [
                "name"          => "Pride and Prejudice",
                'publish_date'  => '1813-01-28'
            ],
            [
                "name"          => "To Kill a Mockingbird",
                'publish_date'  => '1960-07-11'
            ],
            [
                "name"          => "The Book Thief",
                'publish_date'  => '2005-09-01'
            ],
            [
                "name"          => "Twilight",
                'publish_date'  => '2005-10-05'
            ],
            [
                "name"          => "Animal Farm",
                'publish_date'  => '1945-08-17'
            ],
            [
                "name"          => "The Little Prince",
                'publish_date'  => '1943-01-01'
            ],
        ];

        foreach ($seeds as $seed) { 
            Books::create($seed);
        }
    }
}
