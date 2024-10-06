<?php

namespace App\Models;

use Cknow\Money\Casts\MoneyIntegerCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'user_id'];

    protected $casts = [
        'price' => MoneyIntegerCast::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
