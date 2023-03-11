<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-mail', [MailController::class, 'sendMail'])->name('sendMail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('admin')->group(function(){
    Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');
    //buat nampilin create form
    Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');
    // //buat ngepost data create book
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

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/get-books', [BookController::class, 'getBooks'])->name('getBooks');
    // buat nampilin data
});

require __DIR__.'/auth.php';
