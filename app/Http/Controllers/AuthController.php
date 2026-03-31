<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin() { return view('auth.login'); }

    public function login(Request $request) {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role;
            if($role == 'admin') return redirect()->route('admin.dashboard');
            if($role == 'professeur') return redirect()->route('professeur.dashboard');
            if($role == 'etudiant') return redirect()->route('etudiant.dashboard');
        }

        return back()->with('error','Email ou mot de passe incorrect');
    }

    public function showRegister() { return view('auth.register'); }

    public function register(Request $request) {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:4',
            'role'=>'required|in:etudiant,professeur'
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role
        ]);

        Auth::login($user);

        if($user->role=='professeur') return redirect()->route('professeur.dashboard');
        if($user->role=='etudiant') return redirect()->route('etudiant.dashboard');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
