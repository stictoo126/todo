<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function create()
    {
        $cagories = Category::all();
        return view('create');
    }
}
