<?php

namespace Tests\Unit;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(false);
    }
    public function insertAuthorsAndBooksTest(){
        $users = factory(Author::class, 3)
            ->create();

    }
    public function mapBookTest(){
        $data = [
            ['name' => 'book name 1',
                'description' => 'book description 1',
                'author' => 'author 1'],

            ['name' => 'book name 2',
                'description' => 'book description 2',
                'author' => 'author 2']
        ];
        $controller = new Controller();
        dd($controller->mapBook($data));
//        $this->assertTrue($controller->mapBook($data));
    }

    public function insertBookAndAuthorTest(){
        $books = factory(Book::class, 3)->make();
        $this->assertTrue($books);
    }
}
