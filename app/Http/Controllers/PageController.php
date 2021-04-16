<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function team()
    {
        return view('pages.team');
    }
    public function testimonials()
    {
        return view('pages.testimonials');
    }
    public function services()
    {
        return view('pages.services');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    
    public function portfolioDetails()
    {
        return view('pages.portfolioDetails');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
