<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('web.pages.home.home');
    }

    public function contact(){
        return view('web.pages.home.home');
    }
}
