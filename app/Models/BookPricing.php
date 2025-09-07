<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPricing extends Model
{
    use HasFactory;

    protected $fillable = ['book_name', 'price'];
}
