<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    public function author(){ //un libro puede tener muchos préstamos
        return $this->belongsTo(Author::class);
    }

    public function loans(){ //un libro puede tener muchas categorías
        return $this->hasMany(Loab::class);
    }
}
