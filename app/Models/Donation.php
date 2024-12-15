<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'Donation';
    use HasFactory;
    protected $primaryKey = 'DonationId';
    protected $fillable = [
    'DonationDate', 'UserId', 'EventId'
    ];

    public function books(){
        return $this->hasMany(Book::class, 'BookId');
    }

    public function event(){
        return $this->belongsTo(Donation::class, 'EventId');
    }

}