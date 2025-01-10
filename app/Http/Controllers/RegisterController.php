<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Register');
    }

    // Traite l'inscription
    public function register(Request $request)
    {
        
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'bio' => 'nullable|string',
                'role' => 'required|in:mentor,mentee,both',
            ]);
        
            $profile_picture = null;
            if ($request->hasFile('profile_picture')) {
                $profile_picture = $request->file('profile_picture')->store('profile_picture', 'public');
            }
        
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'profile_picture' => $profile_picture,
                'bio' => $request->bio,
                'role' => $request->role,
            ]);
        
            auth()->login($user);
        
            return redirect()->route('home');
        }
    
}
