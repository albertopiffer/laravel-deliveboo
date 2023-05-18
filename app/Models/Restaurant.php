<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function typologies(){
        return $this->belongsToMany(Typology::class);
    }

    public function dish(){
        return $this->belongsTo(Dish::class);
    }

}
