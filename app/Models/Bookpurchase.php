<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookpurchase extends Model
{
    use HasFactory;

    // Jo fields aapko mass assignment allow karni hain, unko yahan likho
    protected $fillable = [
        'title',
        'author',
        'price',
        'image',  // Agar aap image field bhi save kar rahe hain to
    ];
}
