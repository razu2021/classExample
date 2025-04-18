<?php

namespace App\Http\Controllers\backend\home\banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use model 
use App\Models\homeBanner;  


class BannerController extends Controller
{
    /** ---- index page -- */
    public function index(){
       $all =  homeBanner::get();
     
  
        return view('backend.home.banner.index',compact('all'));
    }


    /** ---- add page -- */
    public function add(){
        return view('backend.home.banner.add');
    }


    /** ---- view page -- */
    public function view(){
        return view('backend.home.banner.view');
    }


    /** ---- edit page -- */
     public function edit(){
        return view('backend.home.banner.edit');
    }










}
