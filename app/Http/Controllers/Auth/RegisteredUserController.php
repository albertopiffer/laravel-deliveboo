<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

use App\Models\Restaurant;
use App\Models\Typology;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $typologies = Typology::orderBy('name')->get();
        return view('auth.register', compact('typologies'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'p_iva' => ['required', 'string', 'max:11', 'unique:' . User::class],
            'typologies' => 'required_without_all:0'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

            'p_iva' => $request['p_iva'],
        ]);

        // $restaurant = Restaurant::create([
        //     'restaurant_name' => $request['restaurant_name'], // 'restaurant_name' is the name of the input in the form 'register.blade.php
        //     'address' => $request['address'],
        //     'description' => $request['description'],
        //     'thumbnail' => $request['thumbnail'],

        //     'user_id' => $user->id,
        // ]);
        $data = [
            'restaurant_name' => $request->input('restaurant_name'),
            'address' => $request->input('address'),
            'description' => $request->input('description'),
            'user_id' => $user->id,
        ];
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $cover_path = Storage::put('uploads', $thumbnail);
            $data['cover_image'] = $cover_path;
        }

        $restaurant = Restaurant::create($data);

        if (isset($request['typologies'])) {
            $restaurant->typologies()->attach($request['typologies']);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
