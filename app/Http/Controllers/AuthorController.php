<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    public function show()
    {
        return view('author'); // author.blade.php ko render kare
    }
}

