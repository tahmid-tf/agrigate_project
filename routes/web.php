<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/tt', function () {
//    return view('welcome');
//});

// --------------------------------- language translation ---------------------------------------------

Route::get('lang/{lang}', function ($lang) {
    session()->put('locale',$lang);
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


// ============================== HOMEPAGE ===============

// ===================== SOLUTION ======================

Route::get('/solutions', "UserPanelController@solutions")->name('solutions');
Route::get('/solutions-agrigate-center', "UserPanelController@AgrigateCenter")->name('agrigate-center');
// ============================== SOLUTION ===============

// ===================== ABOUT US ======================
Route::get('/about-us', "UserPanelController@AboutUs")->name('about');
// ================================ ABOUT US ==============

// ===================== APP ======================
Route::get('/app', "UserPanelController@App")->name('app');
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
Route::get('/apply-now', "UserPanelController@ApplyNow")->name('apply-now');


// ============================== Career ===============

// ----------------------------------------------------------------- Auth routes ----------------------------------------------------------------------------------


Route::middleware('auth')->group(function () {

    Route::get('log_out', function (){
        \auth()->logout();
        return redirect('/');
    })->name('logout');


    Route::get('/dashboard', function () {
        return view('admin.admin-content.dashboard.index');
    })->name('admin.dashboard');

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

});

// ----------------------------------------------------------------- Auth routes ----------------------------------------------------------------------------------
