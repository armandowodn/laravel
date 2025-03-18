<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        array_push($arr,[
            'book_name' => 'To Kill a Mockingbird',
            'author_name' => 'Harper Lee'
        ]);
        array_push($arr,[
            'book_name' => '1984',
            'author_name' => 'George Orwell'
        ]);
        array_push($arr,[
            'book_name' => 'The Alchemist',
            'author_name' => 'Paulo Coelho'
        ]);
        array_push($arr,[
            'book_name' => 'Atomic Habits',
            'author_name' => 'James Clear'
        ]);
        array_push($arr,[
            'book_name' => 'Harry Potter and the Sorcerers Stone',
            'author_name' => 'J.K. Rowling'
        ]);
        foreach ($arr as $key) {
            Books::factory()->create([
                'book_name' => $key['book_name'],
                'author_name' => $key['author_name'],
            ]);
        }
        
        print('BooksSeeder');
    }
}
