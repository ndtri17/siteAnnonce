<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function displayProfile()
    {
        $user = Auth::user();
        $posts = $user->posts;
        return view('user.profile', compact('user','posts'));
    }

    public function update_user_profile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'nullable|string|max:255|unique:users,username,' . $user->id,
            'email' => 'nullable|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
        ]);

        $dataToUpdate = [];

        if ($request->filled('username')) {
            $dataToUpdate['username'] = $request->input('username');
        }

        if ($request->filled('email')) {
            $dataToUpdate['email'] = $request->input('email');
        }

        if ($request->filled('password')) {
            $dataToUpdate['password'] = Hash::make($request->input('password'));
        }

        if (!empty($dataToUpdate)) {
            User::where('email', $user->email)->update($dataToUpdate);
            return redirect()->route('profile')->with('success', 'Informations de l\'utilisateur mises à jour avec succès!');
        } else {
            return redirect()->route('profile')->with('success', 'Aucune information utilisateur à mettre à jour.');
        }
    }
}


