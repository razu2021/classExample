<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exampleController extends Controller
{
    //

    public function myindex(){

       return view('index');

    }


    public function myproduct(){



        
        return view('website.product');



    }


}
