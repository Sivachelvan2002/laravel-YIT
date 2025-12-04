<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('pages.home');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }
    function gallery(){
        return view('pages.gallery');
    }
    function services(){
        return view('pages.services');
    }
}
