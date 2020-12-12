<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Routing\Controller as BaseController;
use Maatwebsite\Excel\Facades\Excel;

class Controller extends BaseController
{

    public function index()
    {
        $books = Book::with('author')->orderBy('id', 'DESC')->get();
        return view('welcome', compact('books'));
    }

    public function upload(FileUploadRequest $request)
    {
        $filename = 'select_file';
        if($request->hasFile($filename))
        {
            $data = $this->parseBook($request->$filename);
            $books = $this->mapBook($data[0]);
            if(count($books) > 0){
                $job = (new \App\Jobs\BooksStatusJob($books));
                dispatch($job);
            }
        }
        return back()->with('success', 'Excel Data Imported successfully.');
    }

    public function insertBook($data = [])
    {
        try {
            $author = Author::updateOrCreate(['name' => $data['author']], ['name' => $data['author']]);
            Book::updateOrCreate(['name' => $data['name']], ['name'=> $data['name'], 'description' => $data['description'], 'author_id'=> $author->id]);
            return ['status' => 'true', 'data' => $data];
        }catch (\Exception $e) {
            return ['status' => 'false', 'data' => $data];
        }
    }

    public function mapBook($data)
    {
        $rows_output = [];
        if (count($data) > 0) {
            array_shift($data);
            $rows_output = array_map( function ($row) {
                $row = array_filter($row);
                return array(
                    'name' => $row[0],
                    'description' => $row[1],
                    'author' => $row[2],
                );
            }, $data );
        }
        return $rows_output;
    }

    public function parseBook($file)
    {
        return Excel::toArray(new Book, $file);
    }

}
