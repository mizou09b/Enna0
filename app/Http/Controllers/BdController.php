<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function offres() {
        return view('offres');
    }

    public function admin() {
        return view('admin');
    }
}
