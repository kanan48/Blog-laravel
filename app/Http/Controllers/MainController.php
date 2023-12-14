<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    // Viewing all pages 
    public function about()
    {
        return view ('about');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function blog()
    {
        return view ('blog_post');
    }

    // public function index()
    // {
    //     $data = Category::all();
    //     return view('index', compact('data'));
    // }

    public function gallery()
    {
        return view ('gallery');
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
