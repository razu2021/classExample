<?php

namespace App\Http\Controllers\backend\banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bannerController extends Controller
{
  
    public function index(){
        return view('backend.banner.index');
    }

    public function add(){
        return view('backend.banner.add');
    }
    public function view(){
        return view('backend.banner.view');
    }
    public function edit(){
        return view('backend.banner.edit');
    }


// submit data 
public function submit(Request $request){
    echo $request->banner_title;
    echo "<br>";
    echo $request->banner_heading;
    echo "<br>";
    echo $request->banner_desc;
    echo "<br>";
    return ;
}

}
