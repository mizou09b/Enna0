<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function adminLogin(Request $request)
    {

        $adminData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $request->session()->regenerate();
        if (Auth::attempt(['username' => $adminData['username'], 'password' => $adminData['password']])) {
            return redirect('/offres')->with('success', 'You are logged in.');
        } else {
            return redirect('admin')->with('error', 'You are not an admin!');
        }
    }

    public function adminLogout() {
        Auth::logout();
        return redirect('/')->with('success', 'You are logged out.');
    }
}
