<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ViewController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('index', compact('data'));
    }
}
