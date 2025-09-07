<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use App\Models\Book;

class CustomerOrderController extends Controller
{
    public function create()
    {
        $books = Book::all();
        return view('customer_orders.create', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        CustomerOrder::create($request->all());

        return redirect()->back()->with('success', 'Order placed successfully!');
    }
}
