<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');
//buat nampilin create form

Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');
// //buat ngepost data create book

Route::get('/get-books', [BookController::class, 'getBooks'])->name('getBooks');
// buat nampilin data
Route::get('/update-book/{id}',[BookController::class,
'getBookById'])->name('getBookById');
// buat nampilin data di update
Route::patch('/update-book/{id}',[BookController::class,
'updateBook'])->name('updateBook');
// buat kirim data terbaru kita

Route::delete('/delete-book/{id}',[BookController::class,
'deleteBook'])->name('deleteBook');
// buat delete data

Route::post('/create-book-category', [BookController::class,
'createCategory'])->name('createCategory');
//buat create data category

Route::get('/view-buyer', [BuyerController::class, 'viewBuyer'])->name('viewBuyer');
//buat menampilkan data view Buyer
