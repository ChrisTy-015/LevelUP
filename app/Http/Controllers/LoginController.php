<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Login');
    }

    // Gère la soumission du formulaire de connexion
    public function login(Request $request)
    {
        // Validation des entrées
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentative de connexion de l'utilisateur
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/home');
        }

        // En cas d'échec
        return back()->withErrors([
            'email' => 'Les identifiants sont incorrects.',
        ]);
    }
}
