<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class CustomerOrder extends Model
{
    protected $table = 'customer_orders';

    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'address',
        'book_id',
        'quantity'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
