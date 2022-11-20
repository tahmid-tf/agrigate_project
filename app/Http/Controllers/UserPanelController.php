<?php

namespace App\Http\Controllers;

use App\App;
use App\Banner;
use App\Buyer;
use App\Partner;
use App\Processing;
use App\Program;
use App\Project;
use App\Slider;
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
        $sliders = Slider::all();
        $goals = Goal::all();
        $testimonials = Testimonial::all();
        $news = News::skip(0)->take(2)->orderBy('id', 'desc')->get();
        $crops = Crop::all();

//        return view('user.homepage', compact('testimonials', 'goals', 'news', 'sliders'));

        return view('user.v2.front', compact('testimonials', 'goals', 'news', 'sliders','crops'));


    }

    public function Source()
    {
        $banner = Banner::where('banner', 'source_from_us')->first();
//        $processing_and_trade_banner = Banner::where('banner','processing_and_trade')->first();
        $crops = Crop::all();
        $processings = Processing::all();
        $buyers = Buyer::where('tag', 'b')->get();

        return view('user.source-from-us', compact('crops', 'processings', 'buyers', 'banner'));
    }

    public function Work()
    {
        $banner = Banner::where('banner', 'work_with_us')->first();
        $partners = Partner::all();
        $dev_partners = Buyer::where('tag', 'dp')->get();

        return view('user.work-with-us', compact('partners', 'dev_partners', 'banner'));
    }

    public function News()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('user.news', compact('news'));
    }

    public function SingleNews($id)
    {
        $news = News::find($id);
        return view('user.single-news', compact('news'));
    }


// ---------------------------------- Project ---------------------------------------

    public function Project()
    {
        $news = Project::orderBy('id', 'desc')->get();
        return view('user.project', compact('news'));
    }

    public function SingleProject($id)
    {
        $news = Project::find($id);
        return view('user.single-news', compact('news'));
    }

// ---------------------------------- Project ---------------------------------------

    /*--------------------------------------Home-----------*/

    /*------------------- Solutions----------------------------*/

    /* Solution for Farmers */
    public function solutions()
    {
        $banner = Banner::where('banner', 'solution_for_farmer')->first();
        return view('user.solutions', compact('banner'));
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
        $banner = Banner::where('banner', 'agrigate_center')->first();
        $programs = Program::all();
        return view('user.agrigate-center', compact('programs', 'banner'));
    }

    /*------------------------------- Solutions-----------------*/

    /*------------------- About Us  ----------------------------*/

    public function AboutUs()
    {
        $banner = Banner::where('banner', 'about')->first();
        return view('user.about-us', compact('banner'));
    }
    /*------------------------------- About Us  ---------------*/

    /*------------------- APP ----------------------------*/

    public function App()
    {
        $sp_partners = Buyer::where('tag', 'sp')->get();
        $app_slider = App::all();
        return view('user.app', compact('sp_partners', 'app_slider'));
    }
    /*------------------------------- APP  ---------------*/


    /*------------------- Financial Inclusion ----------------------------*/

    public function FinancialInclusion()
    {
        $banner = Banner::where('banner', 'financial_inclusion')->first();
        $ip_partners = Buyer::where('tag', 'i')->get();
        return view('user.financial-inclusion', compact('ip_partners', 'banner'));
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

        $banner = Banner::where('banner', 'team')->first();
        $directors = Team::where('tag', 'd')->get();
        $advisors = Team::where('tag', 'a')->get();
        $teams = Team::where('tag', 't')->get();

        return view('user.team', compact('directors', 'advisors', 'teams', 'banner'));
    }
    /*---------------------------- Team ----------------------*/

    /*------------------- Career ----------------------------*/

    public function Career()
    {
        $banner = Banner::where('banner', 'career')->first();
        $careers = Career::all();
        return view('user.career', compact('careers', 'banner'));
    }

    public function ApplyNow($id)
    {
        $careers = Career::find($id);

        return view('user.apply-now', compact('careers'));
    }
    /*------------------------------------------ Career ------*/

}
