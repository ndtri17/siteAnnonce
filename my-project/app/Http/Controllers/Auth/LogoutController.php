<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{

    public function completeLogout(Request $request)
    {
        // Get the current user's information
        $user = Auth::user();

        // Log the user out
        Auth::logout();

        // Invalidate the current session and regenerate the token
        $request->session()->invalidate();

        // Generate a new session token
        $request->session()->regenerateToken();

        // Redirect the user to the login page
        return redirect('/login')->with('status', 'Vous avez été déconnecté avec succès.');
    }

    public function deleteUser(Request $request) { 
        $user = Auth::user();

        $user->delete();

        Auth::logout();

        $request->session()->invalidate();

        return redirect('/login')->with('status', 'Votre compte a été supprimé avec succès.');

    }
}
