<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dish extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'name',
        'description',
        'tipology',
        'visible',
        'price',
        'thumbnail'
    ];

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

}
