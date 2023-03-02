<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable
    = ['category_name'];

    public function book(){
        return $this->hasMany(Book::class, 'category_id', 'id');
    }

    use HasFactory;
}
