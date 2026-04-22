<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentmngtController extends Controller
{
    public function index () {
        return view ('student.index');
    }
}
