<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    /*-------------------Home----------------------------*/
    public function index(){
        return view('user.homepage');
    }
    public function Source(){
        return view('user.source-from-us');
    }
    public function Work(){
        return view('user.work-with-us');
    }
    /*--------------------------------------Home-----------*/

    /*------------------- Solutions----------------------------*/

    /* Solution for Farmers */
    public function solutions(){
        return view('user.solutions');
    }

    /* Agrigate Center */
    public function AgrigateCenter(){
        return view('user.agrigate-center');
    }

    /*------------------------------- Solutions-----------------*/

    /*------------------- Financial Inclusion ----------------------------*/

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

    /*--------------------------------------- Financial Inclusion -------------*/

    /*------------------- Team ----------------------------*/

    public function Team(){
        return view('user.team');
    }
    /*---------------------------- Team ----------------------*/

    /*------------------- Career ----------------------------*/

    public function Career(){
        return view('user.career');
    }
    public function ApplyNow(){
        return view('user.apply-now');
    }
    /*------------------------------------------ Career ------*/

}
