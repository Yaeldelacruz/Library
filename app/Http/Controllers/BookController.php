<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Editorial;
use App\Models\Gender;
use App\Models\Nacionality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class BookController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::orderBy('id', 'desc')->paginate();
        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $editorials = Editorial::all();
        $authors = Author::all();
        return view('book.create', compact('editorials', 'authors', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $book = new Book();
        // $book = Book::create([
            $book->name =  $request->name;
            $imagen = $request->file('url')->store('public/');
            $url = Storage::url($imagen);
            $book->url = $url;
            $book->count =  $request->count;
            $book->user_id =  $request->user_id;
            $book->editorial_id =  $request->editorial_id;
            $book->author_id =  $request->author_id;

            $book->save();
        // ]);
        return redirect()->route('book.show', $book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book, Editorial $editorial)
    {
        $user = Auth::user();
        $editorial = Editorial::all();
        if($editorial){
            $editorial = Editorial::where('id', $book->editorial_id)->get();
            $author = Author::where('id', $book->author_id)->get();
        }
        return view('book.show', compact('editorial', 'book', 'author', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $user = Auth::user();
        $editorials = Editorial::all();
        $authors = Author::all();
        return view('book.edit', compact('editorials', 'authors', 'book', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book)
    {
            $book->name =  $request->name;
            $imagen = $request->file('url')->store('public/');
            $url = Storage::url($imagen);
            $book->url = $url;
            $book->count =  $request->count;
            $book->user_id =  $request->user_id;
            $book->editorial_id =  $request->editorial_id;
            $book->author_id =  $request->author_id;

            $book->save();
        return redirect()->route('book.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }
}
