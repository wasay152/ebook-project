<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show()
    {
        // 'book' naam ka view return kar raha hai
        return view('book');
    }
}
