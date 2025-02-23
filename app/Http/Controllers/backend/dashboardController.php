<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   /**---- dashboard index page function ==== */
   public function index(){
    return view('backend.index');
   }
}
