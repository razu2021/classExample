<?php

namespace App\Http\Controllers\backend\usermange;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userManageController extends Controller
{
    public function index(){

        $userdata = User::get();
       
        return view('backend.user_manage.index',compact('userdata'));
    }
}
