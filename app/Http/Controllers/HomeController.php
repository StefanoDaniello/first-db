<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class HomeController extends Controller
{
    //molte cose (libri)
    public function index()
    {
        $books = Book::all();
        // var_dump di laravell per il teemplate basta aggiungere una @
        // dd($books);
        return view('home', compact('books'));
    }
    //poche cose (libri)
    // public function show()
    // {
    //     return view('show');
    // }
}