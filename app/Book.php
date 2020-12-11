<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';
    protected $fillable = ['name', 'description', 'author_id'];

    public function author(){
        return $this->belongsTo(Author::class, 'author_id');
    }
}
