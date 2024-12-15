<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    protected $table = 'Event';
    use HasFactory;
    protected $primaryKey = 'EventId';
    public $timestamps = false;
    protected $fillable = [
        'EventTitle', 'EventDescription', 'StartDate', 'EndDate', 'EventCategoryId'
    ];

    public function eventCategory(){
        return $this->belongsTo(EventCategory::class, 'EventCategoryId');
    }

    public function donations(){
        return $this->hasMany(Donation::class, 'EventId');
    }
}