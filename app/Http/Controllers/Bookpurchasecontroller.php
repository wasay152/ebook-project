<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookpurchase;

class Bookpurchasecontroller extends Controller
{
    public function create()
    {
        $books = Bookpurchase::latest()->get();
        return view('bookpurchase', compact('books'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('book_cover')) {
            $path = $request->file('book_cover')->store('book_images', 'public');
        }

        Bookpurchase::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'price' => $validated['price'],
            'image' => $path,
        ]);

        return redirect()->back()->with('success', 'Book purchased successfully!');
    }
}
