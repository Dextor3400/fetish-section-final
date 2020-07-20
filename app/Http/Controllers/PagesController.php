<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function tour()
    {
        return view('pages.tour');
    }

    public function media()
    {
        return view('pages.media');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
