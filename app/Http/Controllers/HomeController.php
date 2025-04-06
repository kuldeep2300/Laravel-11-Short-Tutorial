<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show() {
        // return view('home');
        // return redirect()->to('/home/profile/user');
        // return redirect()->route('home');
        return to_route('home');
    }

    function user() {
        return to_route('user', ['name' => 'Kuldeep']);
    }
}
