<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Artisan;


// --------------------------------- language translation ---------------------------------------------

Route::get('lang/{lang}', function ($lang) {
    session()->put('locale', $lang);
    return redirect()->back();
})->name('lang');

// --------------------------------- language translation ---------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----------------------------------------User routes ----------------------------------------

// ===================== HOMEPAGE======================

Route::get('/', "UserPanelController@index")->name('homepage');
Route::get('/source-from-us', "UserPanelController@Source")->name('source');
Route::get('/work-with-us', "UserPanelController@Work")->name('work');
Route::get('/news', "UserPanelController@News")->name('news');
Route::get('/single-news/{id}', "UserPanelController@SingleNews")->name('single-news');

Route::get('/project', "UserPanelController@project")->name('project');
Route::get('/single-project/{id}', "UserPanelController@SingleProject")->name('single-project');


// ============================== HOMEPAGE ===============

// ===================== SOLUTION ======================

Route::get('/solutions', "UserPanelController@solutions")->name('solutions');


Route::get('/solutions-agrigate-center', "UserPanelController@AgrigateCenter")->name('agrigate-center');

// ============================== SOLUTION ===============

// ===================== ABOUT US ======================
Route::get('/about-us', "UserPanelController@AboutUs")->name('about');
// ================================ ABOUT US ==============

// ===================== APP ======================
Route::get('/services', "UserPanelController@App")->name('app');
// ================================ APP ==============

// ===================== FINANCIAL INCLUSION ======================

Route::get('/financial-inclusion', "UserPanelController@FinancialInclusion")->name('financial-inclusion');
Route::get('/apply-for-bank-account', "UserPanelController@ApplyForBankAccount")->name('bank-account');
Route::get('/apply-for-agri-loan', "UserPanelController@ApplyForAgriLoan")->name('agri-loan');
Route::get('/apply-for-agri-insurance', "UserPanelController@ApplyForAgriInsurance")->name('agri-insurance');

// ================================ FINANCIAL INCLUSION ============

// ===================== TEAM ======================

Route::get('/team', "UserPanelController@Team")->name('team');

// ============================== TEAM ===============

// ===================== Career ======================

Route::get('/career', "UserPanelController@Career")->name('career');
Route::get('/apply-now/{id}', "UserPanelController@ApplyNow")->name('apply-now');

// ============================== Career ===============

// ----------------------------------------------------------------- Auth routes ----------------------------------------------------------------------------------


Route::middleware('auth')->group(function () {

    Route::get('log_out', function () {
        \auth()->logout();
        return redirect('/');
    })->name('logout');


    Route::get('/dashboard', function () {
        return view('admin.admin-content.dashboard.index');
    })->name('admin.dashboard');

    // ------------------------------- Slider -----------------------------

    Route::resource('admin/slider', "SliderController");

// ------------------------------- Slider -----------------------------

// ------------------------------- Banner -----------------------------

    Route::resource('admin/banner', "BannerController")->except(['create']);

// ------------------------------- Banner -----------------------------


// ------------------------------- Goal -----------------------------

    Route::resource('admin/goal', "GoalController");

// ------------------------------- Goal -----------------------------


// ------------------------------- Testimonial -----------------------------

    Route::resource('admin/testimonial', "TestimonialController");

// ------------------------------- Testimonial -----------------------------


// ------------------------------- News -----------------------------

    Route::resource('admin/news', "NewsController");

// ------------------------------- News -----------------------------

// ------------------------------- Crops -----------------------------

    Route::resource('admin/crop', "CropController");

// ------------------------------- Crops -----------------------------

// ------------------------------- Processing -----------------------------

    Route::resource('admin/processing', "ProcessingController");

// ------------------------------- Processing -----------------------------

// ------------------------------- Buyers and partners -----------------------------

    Route::resource('admin/buyer', "BuyerController");

// ------------------------------- Buyers and partners -----------------------------

// ------------------------------- Partners -----------------------------

    Route::resource('admin/partner', "PartnerController");

// ------------------------------- Partners -----------------------------

// ------------------------------- Program -----------------------------

    Route::resource('admin/program', "ProgramController");

// ------------------------------- Program -----------------------------

// ------------------------------- Team -----------------------------

    Route::resource('admin/team', "TeamController");

// ------------------------------- Team -----------------------------

// ------------------------------- Career -----------------------------

    Route::resource('admin/career', "CareerController");

// ------------------------------- Career -----------------------------

    // ------------------------------- App -----------------------------

    Route::resource('admin/app', "AppController");

// ------------------------------- App -----------------------------

    // ------------------------------- Project -----------------------------

    Route::resource('admin/project', "ProjectController");

// ------------------------------- Project -----------------------------

});

// ----------------------------------------------------------------- Auth routes ----------------------------------------------------------------------------------



// ----------------------------------------------------------------- Email Route ----------------------------------------------------------------------------------

Route::post('email/', "EmailController@send")->name('mail.send');

// ----------------------------------------------------------------- Email Route ----------------------------------------------------------------------------------


// ------------------------------- link storage ----------------------------

Route::get('/link-storage', function () {
    Artisan::call('storage:link');
});

// ------------------------------- link storage ----------------------------

// ------------------------------- Clear cache ----------------------------

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'Cache cleared'; //Return anything
});

// ------------------------------- Clear cache ----------------------------
