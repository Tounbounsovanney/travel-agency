<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    function index(){
        
        return view('frontend.front_home');
    }
    function about(){
        return view('frontend.front_about');
    }
    function service(){
        return view('frontend.front_service');
    }
    public function packages(){
        return view('frontend.front_packages');
    }
    public function contact(){
        return view('frontend.front_contact');
    }
}
