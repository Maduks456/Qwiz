<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\Theme;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function start(){
        $themes = Theme::all();
        return view('welcome', compact("themes"));
    }
    public function create()
    {
        return view("auth.register");
    }
    public function store(Request $request) {
  
    $validated = $request->validate([
            "name" => ["required", "max:255", Rule::unique('users', 'name')],
            "role" => ["required", 'in:User,Admin'],
            "password" => ["required", Password::min(6)->numbers()->letters()]
        ]);  
        $user = User::create($validated);
        Auth::login($user);
        return redirect("/");
    }
}
