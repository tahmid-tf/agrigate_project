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
use App\Career;
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
//    public function digitalMarket(){
//
//        return view('user.digital-market');
//    }
//    public function IOTService(){
//
//        return view('user.iot-service');
//    }
//    public function advisoryService(){
//
//        return view('user.advisory-service');
//    }
//    public function financeService(){
//
//        return view('user.finance-service');
//    }
//
//    public function deliveryChannel1(){
//        $var_primary="Digital Market";
//        $var1="Buy Products";
//        return view('user.delivery-channel-1',compact('var_primary','var1'));
//    }
//    public function deliveryChannel2(){
//        $var_primary="Digital Market";
//        $var1="Sell Products";
//        return view('user.delivery-channel-1',compact('var_primary','var1'));
//    }
//    public function deliveryChannel3(){
//        $var_primary="Digital Market";
//        $var1="Market Price Info";
//        return view('user.delivery-channel-2',compact('var_primary','var1'));
//    }
//    public function deliveryChannel4(){
//        $var_primary="Digital Market";
//        $var1="Input Distribution";
//        return view('user.delivery-channel-2',compact('var_primary','var1'));
//    }
//    public function deliveryChannel5(){
//        $var_primary="Advisory Services";
//        $var1="Production Technology";
//        return view('user.delivery-channel-1',compact('var_primary','var1'));
//    }
//    public function deliveryChannel6(){
//        $var_primary="Advisory Services";
//        $var1="Advisory Consultation";
//        return view('user.delivery-channel-3',compact('var_primary','var1'));
//    }
//    public function deliveryChannel7(){
//        $var_primary="Advisory Services";
//        $var1="Best Practices";
//        return view('user.delivery-channel-2',compact('var_primary','var1'));
//    }
//    public function deliveryChannel8(){
//        $var_primary="Advisory Services";
//        $var1="Weather Information";
//        return view('user.delivery-channel-1',compact('var_primary','var1'));
//    }
//    public function deliveryChannel9(){
//        $var_primary="IOT Services";
//        $var1="Soil Testing";
//        return view('user.delivery-channel-2',compact('var_primary','var1'));
//    }
//    public function deliveryChannel10(){
//        $var_primary="Financial Inclusion";
//        $var1="Bank A/C Opening";
//        return view('user.delivery-channel-2',compact('var_primary','var1'));
//    }
//    public function deliveryChannel11(){
//        $var_primary="Financial Inclusion";
//        $var1="Agri Loan for Farmers";
//        return view('user.delivery-channel-1',compact('var_primary','var1'));
//    }
//    public function deliveryChannel12(){
//        $var_primary="Financial Inclusion";
//        $var1="Crop Insurance";
//        return view('user.delivery-channel-1',compact('var_primary','var1'));
//    }

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
        $sp_partners = Buyer::where('tag','sp')->get();
        return view('user.app', compact('sp_partners'));
    }
    /*------------------------------- APP  ---------------*/


    /*------------------- Financial Inclusion ----------------------------*/

    public function FinancialInclusion()
    {
        $ip_partners = Buyer::where('tag','i')->get();
        return view('user.financial-inclusion', compact('ip_partners'));
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
        return view('user.career',compact('careers'));
    }

    public function ApplyNow($id)
    {
        $careers = Career::find($id);

        return view('user.apply-now',compact('careers'));
    }
    /*------------------------------------------ Career ------*/

}
