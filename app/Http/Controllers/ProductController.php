<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        return view('page1');
    }
    public function new(Request $request) {
        return view('page2');
    }
    public function outlet(Request $request) {
        return view('page3');
    }
}
