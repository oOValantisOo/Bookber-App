<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    use HasFactory;
    protected $table = 'Articles';
    protected $primaryKey = 'ArticleId';
    public $timestamps = false;
    protected $fillable = [
        'ArticleTitle', 'ArticleDescription', 'PublishDate', 'Writer', 'ArticleContent', 'ArticleCategoryId'
    ];

    public function articleCategory(){
        return $this->belongsTo(ArticleCategory::class, 'ArticleCategoryId');
    }
}