<?php

namespace App\Models;

use App\Models\Size;
use App\Models\User;
use App\Models\Color;
use App\Models\Category;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Cknow\Money\Casts\MoneyIntegerCast;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Listing extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'description', 'price', 'user_id'];

    protected $casts = [
        'price' => MoneyIntegerCast::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function savedUsers()
    {
        return $this->belongsToMany(User::class);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Fit::Contain, 150, 150)
            ->nonQueued();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
