<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'username' => ['required', 'min:3', 'max:15', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:191',
        ]);

        // Cara 1 enkripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // Cara 2 enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Cara 1 flash session
        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect()->route('login')->with('success', 'Registration successfull! Please login');
        // dd('registration berhasil');
        // return $request->all();
    }
}
