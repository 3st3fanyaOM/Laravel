<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookCategory extends Model
{
    use HasFactory;

    protected $table = 'book_category'; // a queb tabla nos vamos a referir

    public function books(){
        return $this->belongsTo(Book::class);//por que es la tabla intermedia
    }

    public function category(){
        return $this->belongsToMany(Category::class);
    }
}
