<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    public function books(){
        return $this->belongsToMany(Book::class, 'book_id', 'buyer_id', 'book_buyer');
    }
}
