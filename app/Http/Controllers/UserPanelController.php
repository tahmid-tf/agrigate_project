<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        return view('user.homepage');
    }
    public function solutions(){
        return view('user.solutions');
    }
    public function AgrigateCenter(){
        return view('user.agrigate-center');
    }
}
