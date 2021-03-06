<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'authors';
    protected $fillable = ['name'];

    public function books(){
        return $this->hasMany(Book::class, 'author_id');
    }
}
