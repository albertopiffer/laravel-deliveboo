<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\dish;

class DishController extends Controller
{
    public function index()
    {
        $results = dish::all();
        return response()->json([
            'success' => true,
            'results' => $results,
        ]);
    }

    public function show($id)
    {
        $dish = dish::find($id);

        if ($dish) {
            return response()->json([
                'success' => true,
                'dish' => $dish
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Dish not found'
            ]);
        }
    }
}
