<?php

namespace Tests\Feature;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_map_book()
    {
        $dataInput = [
            [
                0 => "book name 1",
                1 => "book description 1",
                2 => "author 1",
                3 => null,
                4 => null
            ],
            [
                0 => "book name 2",
                1 => "book description 2",
                2 => "author 2",
                3 => null,
                4 => null,
            ]
        ];
        $compareOutput = [
            [
                'name' => 'book name 1',
                'description' => 'book description 1',
                'author' => 'author 1'
            ],
            [
                'name' => 'book name 2',
                'description' => 'book description 2',
                'author' => 'author 2'
            ]
        ];

        $controller = new Controller();
        $result = $controller->mapBook($dataInput);
        $this->assertEquals($this->count($result), $this->count($compareOutput));
    }

    public function test_insert_book_and_author(){
        $books = factory(Book::class, 3)->create();
        $this->assertEquals($books->count(), 3);
    }
}
