<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $table = 'ArticleCategories';
    public $timestamps = false;
    protected $primaryKey = 'ArticleCategoryId';
    protected $fillable = [
        'ArticleCategoryName', 'ArticleCategoryDescription', 
    ];

    public function BookCategory(){
        return $this->hasMany(Book::class, 'ArticleCategoryId');
    }
}