<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoredishRequest;
use App\Http\Requests\UpdatedishRequest;
use App\Models\dish;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::withTrashed()->get();
        $restaurant_id = Auth::id(); //recuperare id utente

        $dishes = dish::where('restaurant_id', $restaurant_id)->get();
        return view('dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredishRequest $request)
    {
        $data = $request->validated();
        $data['restaurant_id'] = Auth::id();
        if ($request->hasFile('thumbnail')) {
            $cover_path = Storage::put('uploads', $data['thumbnail']);
            $data['cover_image'] = $cover_path;
        }
        $dish = dish::create($data);
        return to_route('dishes.show', $dish);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(dish $dish)
    {
        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(dish $dish)
    {
        return view('dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedishRequest  $request
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedishRequest $request, dish $dish)
    {
        $data = $request->validated();
        if ($request->hasFile('thumbnail')) {
            $cover_path = Storage::put('uploads', $data['thumbnail']);
            $data['cover_image'] = $cover_path;

            if ($dish->cover_image && Storage::exists($dish->cover_image)) {
                Storage::delete($dish->cover_image);
            }
        }
        $dish->update($data);

        return to_route('dishes.show', $dish);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(dish $dish)
    {
        //$dish->delete();

        if ($dish->trashed()) {
            $dish->forceDelete();
        } else {
            $dish->delete();
        }

        return to_route('dishes.index');
    }
}
