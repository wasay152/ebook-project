<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BookPricing;

class BookPricingController extends Controller
{
    public function create()
    {
        return view('bookpricing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required|string|max:255',
            'card_type' => 'required|string|max:255', // Only validate, not save
            'price' => 'required|numeric',
        ]);

        // Save only book_name and price
        BookPricing::create([
            'book_name' => $request->book_name,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Book pricing saved successfully!');
    }
}
