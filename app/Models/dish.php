<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dish extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'tipology',
        'visible',
        'price',
        'thumbnail',
        'restaurant_id',
        'cover_image'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    protected function coverPath(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                return asset('storage/' . $attributes['cover_image']);
            }
        );
    }
    protected $appends = ['cover_path'];
}
