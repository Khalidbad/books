<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;


class BooksTableSeeder extends Seeder
{
    public function run()
    {
        // Sample data for books
        $books = [
            [
                'title' => 'Book 1',
                'description' => 'Description for Book 1',
                'cover_image_path' => 'images/images.jpg',
                'price' => 19.99,
            ],
            [
                'title' => 'Book 2',
                'description' => 'Description for Book 2',
                'cover_image_path' => 'images/images1.jpg',
                'price' => 29.99,
            ],
            // Add more books as needed
        ];

        // Insert data into the books table
        foreach ($books as $bookData) {
            Book::create($bookData);
        }
    }
}
