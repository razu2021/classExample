<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class websiteController extends Controller
{

    /**==== index page function ==== */
    public function index(){
        return view('frontend.index');
    }
    /**==== about page function ==== */
    public function about(){
        return view('frontend.pages.about');
    }


}
