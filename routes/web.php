<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NacionalityController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class)->parameters(['books' => 'book'])->names('book');
Route::resource('editorials', EditorialController::class)->parameters(['editorials' => 'editorial'])->names('editorial');
Route::resource('nacionalities', NacionalityController::class)->parameters(['nacionalities' => 'nacionality'])->names('nacionality');
Route::resource('genders', GenderController::class)->parameters(['genders' => 'gender'])->names('gender');
Route::resource('authors', AuthorController::class)->parameters(['authors' => 'author'])->names('author');

Route::controller(IndexController::class)->group(function(){
    Route::get('index', 'index')->name('index.index');
    Route::get('index', 'create')->name('index.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
