<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;


class BookController extends Controller
{
    //

    public function getCreatePage() {
        $categories = Category::all();
        return view('create',['categories' =>$categories]);
    }

    public function createBook(BookRequest $request){

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'realese' => $request->realese,
            'category_id' => $request->category_id,
        ]);

        return redirect(route('getBooks'));
    }

    public function createCategory(Request $request){

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect(route('getBooks'));
    }

    public function getBooks(){

        $books = Book::with('category')->get();
        $categories = Category::with('book')->get();

        return view('view', compact('books', 'categories'));
    }

    public function getBookById($id){
        $book = Book::find($id);
        return view ('update', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id){
        $book = Book::find($id);
        $book -> update([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'realese' => $request->realese,
        ]);
        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Book::destroy($id);

        return redirect(route('getBooks'));
    }


    // API
    public function apiGetBooks(){

        $books = Book::with('category')->get();
        $categories = Category::with('book')->get();

        return $categories;
    }

    public function apiAddCategory(Request $request){

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);

        return 'SUCCESS ADD CATEGORY';
    }

    public function apiDeleteCategory($id){
        Category::destroy($id);

        return 'SUCCESS DELETE CATEGORY';
    }

    public function apiUpdateCategory(Request $request, $id){
        $category = Category::find($id);
        $category -> update([
            'category_name' => $request->category_name,
        ]);

        return 'SUCCESS UPDATE CATEGORY';
    }



}
