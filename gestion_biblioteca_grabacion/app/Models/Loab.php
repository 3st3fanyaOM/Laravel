<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loab extends Model
{
    use HasFactory;

    protected $table = "Loabs";

    public function book(){
        return $this->belongsTo(Books::class);
    }
}
