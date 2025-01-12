<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    //index page 
    public function index(){
        return view('frontend.index');

    }

    //about page 
    public function about(){
        return view('frontend.pages.about');

    }
    //service  page 
    public function service(){
        return view('frontend.pages.service');
    }
    //blog  page 
    public function blog(){
        return view('frontend.pages.blog');

    }
    //contact   page 
    public function contact(){
        return view('frontend.pages.contact');

    }



}
