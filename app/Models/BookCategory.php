<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;
    protected $table = 'book_categories';
    public $timestamps = false;
    protected $primaryKey = 'BookCategoryId';
    protected $fillable = [
        'BookCategoryName', 'BookCategoryDescription'
    ];

    public function BookCategory(){
        return $this->hasMany(Book::class, 'BookCategoryId');
    }
}