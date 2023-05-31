<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\order;
use App\Models\dish;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        //$name = $request->input('name');

        //var_dump($request->input('address'));

        $data = [
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'total' => $request->input('total'),
        ];

        $order = new Order();
        $order->name = $data['name'];
        $order->address = $data['address'];
        // $order->tipology = $data['tipology']; // Se desideri impostare il campo "tipology"
        $order->phone_number = $data['phone_number'];
        $order->total = $data['total'];
        $order->save();

        $quantity = $request->input('quantity');
        $dish_id = $request->input('dish_id');

        $order->dishes()->attach($dish_id, ['quantity' => $quantity]);

        return response()->json(['success' => true, 'message' => 'Nome salvato correttamente']);
    }
}
