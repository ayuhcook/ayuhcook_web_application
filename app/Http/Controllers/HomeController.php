<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.home');
    }

    public function search()
    {
        return view('Home.search');
    }
}
