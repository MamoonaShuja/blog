<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $with = ['authors'];
    public function authors(){
        return $this->belongsToMany(Author::class , 'author_book' , 'book_id' , 'author_id');
    }
}
