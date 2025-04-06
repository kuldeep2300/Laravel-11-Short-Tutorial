<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show() {
        return "Student List";;
    }

    function add() {
        return "Add New Student";
    }
}
