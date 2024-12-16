<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventCategory extends Model
{
    use HasFactory;
    protected $table = 'event_categories';
    public $timestamps = false;
    protected $primaryKey = 'EventCategoryId';
    protected $fillable = [
        'EventCategoryName', 'EventCategoryDescription'
    ];

    public function events(){
        return $this->hasMany(Event::class, 'EventCategoryId');
    }

}