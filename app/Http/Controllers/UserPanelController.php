<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Partner;
use App\Processing;
use App\Program;
use App\Team;
use App\Testimonial;
use App\Goal;
use App\News;
use App\Crop;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    /*-------------------Home----------------------------*/
    public function index()
    {
        $goals= Goal::all();
        $testimonials = Testimonial::all();
        $news= News::skip(0)->take(2)->get();
        return view('user.homepage', compact('testimonials', 'goals','news'));
    }

    public function Source()
    {
        $crops= Crop::all();
        $processings = Processing::all();
        $buyers = Buyer::where('tag','b')->get();

        return view('user.source-from-us',compact('crops','processings','buyers'));
    }

    public function Work()
    {
        $partners= Partner::all();
        $dev_partners = Buyer::where('tag','dp')->get();

        return view('user.work-with-us',compact('partners','dev_partners'));
    }

    public function News()
    {
        $news = News::all();
        return view('user.news',compact('news'));
    }

    public function SingleNews($id)
    {
        $news = News::find($id);
        return view('user.single-news', compact('news'));
    }
    /*--------------------------------------Home-----------*/

    /*------------------- Solutions----------------------------*/

    /* Solution for Farmers */
    public function solutions()
    {
        return view('user.solutions');
    }

    /* Agrigate Center */
    public function AgrigateCenter()
    {
        $programs= Program::all();
        return view('user.agrigate-center',compact('programs'));
    }

    /*------------------------------- Solutions-----------------*/

    /*------------------- About Us  ----------------------------*/

    public function AboutUs()
    {
        return view('user.about-us');
    }
    /*------------------------------- About Us  ---------------*/

    /*------------------- APP ----------------------------*/

    public function App()
    {
        return view('user.app');
    }
    /*------------------------------- APP  ---------------*/


    /*------------------- Financial Inclusion ----------------------------*/

    public function FinancialInclusion()
    {
        return view('user.financial-inclusion');
    }

    public function ApplyForBankAccount()
    {
        return view('user.apply-for-bank-account');
    }

    public function ApplyForAgriLoan()
    {
        return view('user.apply-for-agri-loan');
    }

    public function ApplyForAgriInsurance()
    {
        return view('user.apply-for-agri-insurance');
    }

    /*--------------------------------------- Financial Inclusion -------------*/

    /*------------------- Team ----------------------------*/

    public function Team()
    {

        $directors=Team::where('tag','d')->get();
        $advisors=Team::where('tag','a')->get();
        $teams=Team::where('tag','t')->get();

        return view('user.team',compact('directors','advisors','teams'));
    }
    /*---------------------------- Team ----------------------*/

    /*------------------- Career ----------------------------*/

    public function Career()
    {

        $careers= Career::all();
        return view('user.career');
    }

    public function ApplyNow()
    {
        return view('user.apply-now');
    }
    /*------------------------------------------ Career ------*/

}
