<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Buyer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable
    = ['title', 'author', 'price', 'realese', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function buyers(){
        return $this->belongsToMany(Buyer::class, 'book_buyer', 'book_id', 'buyer_id');
    }


}
