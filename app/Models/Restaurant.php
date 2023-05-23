<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // 'user_id' is the name of the input in the form 'register.blade.php

        'restaurant_name',
        'address',

        'description',
        'thumbnail',
    ];

    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }

    public function dishes()
    {
        return $this->hasmany(Dish::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
