<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\order;

class UserController extends Controller
{
    public function saveName(Request $request)
    {
        $name = $request->input('name');

        // Esegui le operazioni di validazione e salvataggio nel tuo database
        // Ad esempio, potresti salvare il nome in una tabella "users"

        // $neworder = new order();
        // $neworder->name = $name;
        // $neworder->save();

        return response()->json(['success' => true, 'message' => 'Nome salvato correttamente']);
    }
}
