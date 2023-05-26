<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $results = Restaurant::with('typologies')->get();
        return response()->json([
            'success' => true,
            'results' => $results,
        ]);
    }

    public function show($id)
    {
        $restaurant = Restaurant::with('typologies')->find($id);

        if ($restaurant) {
            return response()->json([
                'success' => true,
                'restaurant' => $restaurant
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Restaurant not found'
            ]);
        }
    }
}
