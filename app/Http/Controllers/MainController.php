<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon;

class MainController extends Controller
{
    // Viewing all pages 

    public function contact()
    {
        $data = Category::all();
        return view ('contact', compact('data'));
    }

    public function blog()
    {
        $data = Category::all();
        return view ('blog_post', compact('data'));
    }

    public function index()
    {
        $data = Category::all();
        return view('index', compact('data'));
    }

    public function gallery()
    {
        $data = Category::all();
        return view ('gallery', compact('data'));
    }

    public function addblog()
    {
        $data = Category::all();
        return view ('addblog', compact('data'));
    }

    public function login()
    {
        return view ('login-2');
    }

    public function signup()
    {
        return view ('create-account');
    }

}
