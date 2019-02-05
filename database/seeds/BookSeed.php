<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class, 40)->create();
    }
}
