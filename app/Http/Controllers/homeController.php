<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function about()
    {
        return view('about_us');
    }
    public function contact()
    {
        return view('contact');
    }
}