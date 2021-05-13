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

    public function aboutUs()
    {
        return view('Miscellaneous.about');
    }

    public function supportUs()
    {
        return view('Miscellaneous.support');
    }

    public function feedbackForm()
    {
        return view('Miscellaneous.feedback');
    }

    public function notification()
    {
        return view('Miscellaneous.notification');
    }
}
