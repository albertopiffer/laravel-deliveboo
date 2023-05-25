<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Typology;

class TypologyController extends Controller
{
    public function index()
    {
        $results = Typology::all();
        return response()->json([
            'success' => true,
            'results' => $results,
        ]);
    }

    public function show($id)
    {
        $typology = Typology::find($id);

        if ($typology) {
            return response()->json([
                'success' => true,
                'dish' => $typology
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Typology not found'
            ]);
        }
    }
}
