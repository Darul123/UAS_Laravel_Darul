<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interior;

class ProductController extends Controller
{
    public function index(Request $request) {
        $interior = Interior::all();
        return view('page1', compact('interior'));
    }
    public function new(Request $request) {
        return view('page2');
    }
    public function outlet(Request $request) {
        return view('page3');
    }
}
