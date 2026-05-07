<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\Theme;
use App\Models\History;
class SessionController extends Controller
{
    public function destroy()
    {
        session()->forget('user');
        Auth::logout();
        return redirect("/");
    }
    public function history()
    {
        $history = History::where('user_id', auth()->user()->id) 
        ->orderBy('theme')
        ->get();
        return view("history", compact('history'));
    }
    public function create()
    {
        return view("auth.login");
    }
    public function store(Request $request) {
        $validated= $request->validate([
            'name' =>["required"],
            "password" => ["required"]
            ]);

            if (Auth::attempt($validated)) {
                $request->session()->regenerate();
                 return redirect("/");
            }

            return back()->withErrors([
                'name' => 'Nepareizs lietotājvārds vai parole'
            ])->onlyInput('name');
    }
    
}
