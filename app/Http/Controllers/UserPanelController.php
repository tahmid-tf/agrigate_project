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
        $news = Project::orderBy('id', 'desc')->get();
//        $projects = Project::orderBy('id', 'desc')->get();
        $crops = Crop::all();
        $buyers = Buyer::all();


//        return view('user.homepage', compact('testimonials', 'goals', 'news', 'sliders'));

        return view('user.v2.front', compact('testimonials', 'goals', 'news', 'sliders','crops','buyers'));


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
        $projects = Project::orderBy('id', 'desc')->get();
        return view('user.v2.project', compact('projects'));
    }

    public function SingleProject($id)
    {
        $project_details = Project::find($id);
        return view('user.v2.project-details', compact('project_details'));
    }

// ---------------------------------- Project ---------------------------------------

    /*--------------------------------------Home-----------*/

    /*------------------- Solutions----------------------------*/

    /* Solution for Farmers */
    public function solutions()
    {
        $banner = Banner::where('banner', 'solution_for_farmer')->first();
        $processings = Processing::orderBy('id','desc')->get();
        $partners = Partner::all();
        return view('user.v2.solution', compact('banner','processings','partners'));
    }


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
        return view('user.v2.about', compact('banner'));
    }
    /*------------------------------- About Us  ---------------*/

    /*------------------- APP ----------------------------*/

    public function App()
    {
        $sp_partners = Buyer::where('tag', 'sp')->get();
        $app_slider = App::all();
        return view('user.v2.services', compact('sp_partners', 'app_slider'));
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

//        return view('user.team', compact('directors', 'advisors', 'teams', 'banner'));
        return view('user.v2.team', compact('directors', 'advisors', 'teams', 'banner'));
    }
    /*---------------------------- Team ----------------------*/

    /*------------------- Career ----------------------------*/

    public function Career()
    {
        $banner = Banner::where('banner', 'career')->first();
        $careers = Career::all();
        return view('user.v2.career', compact('careers', 'banner'));
    }

    public function ApplyNow($id)
    {
        $project_details = Career::find($id);

        return view('user.v2.career-details', compact('project_details'));
    }
    /*------------------------------------------ Career ------*/

}
