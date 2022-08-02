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
    public function FinancialInclusion(){
        return view('user.financial-inclusion');
    }
    public function ApplyForBankAccount(){
        return view('user.apply-for-bank-account');
    }
    public function ApplyForAgriLoan(){
        return view('user.apply-for-agri-loan');
    }
    public function ApplyForAgriInsurance(){
        return view('user.apply-for-agri-insurance');
    }
    public function Team(){
        return view('user.team');
    }
    public function Source(){
        return view('user.source-from-us');
    }
}
