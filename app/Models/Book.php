<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    public $timestamps = false;
    protected $primaryKey = 'BookId';
    protected $fillable = [
        'BookTitle', 'BookAuthor', 'ReleaseDate', 'BookCategoryId', 'DonationId', 
    ];

    public function bookCategory(){
        return $this->belongsTo(BookCategory::class, 'BookCategoryId');
    }

    public function donation(){
        return $this->belongsTo(Donation::class, 'DonationId');
    }
}