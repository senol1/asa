<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $books = Book::limit(4)->get();
        return view('home', compact("books")) ;
    }

    public function asa()
    {
        return view('asa') ;
    }

    public function showBook($id)
    {
        $book = Book::find($id);

        $categories = Category::all();

        return view('showBook', compact('book', "categories"));
    }

    public function about()
    {
        return view('about');
    }
}
