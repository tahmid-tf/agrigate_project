<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Artisan;

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

//Route::get('/services', "UserPanelController@digitalMarket")->name('services');
//Route::get('/iot-services', "UserPanelController@IOTService")->name('iot-services');
//Route::get('/advisory-services', "UserPanelController@advisoryService")->name('advisory-services');
//Route::get('/finance-services', "UserPanelController@financeService")->name('finance-services');
//
//Route::get('/delivery-channel-1', "UserPanelController@deliveryChannel1")->name('delivery-channel-1');
//Route::get('/delivery-channel-2', "UserPanelController@deliveryChannel2")->name('delivery-channel-2');
//Route::get('/delivery-channel-3', "UserPanelController@deliveryChannel3")->name('delivery-channel-3');
//Route::get('/delivery-channel-4', "UserPanelController@deliveryChannel4")->name('delivery-channel-4');
//Route::get('/delivery-channel-5', "UserPanelController@deliveryChannel5")->name('delivery-channel-5');
//Route::get('/delivery-channel-6', "UserPanelController@deliveryChannel6")->name('delivery-channel-6');
//Route::get('/delivery-channel-7', "UserPanelController@deliveryChannel7")->name('delivery-channel-7');
//Route::get('/delivery-channel-8', "UserPanelController@deliveryChannel8")->name('delivery-channel-8');
//Route::get('/delivery-channel-9', "UserPanelController@deliveryChannel9")->name('delivery-channel-9');
//Route::get('/delivery-channel-10', "UserPanelController@deliveryChannel10")->name('delivery-channel-10');
//Route::get('/delivery-channel-11', "UserPanelController@deliveryChannel11")->name('delivery-channel-11');
//Route::get('/delivery-channel-12', "UserPanelController@deliveryChannel12")->name('delivery-channel-12');




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
Route::get('/apply-now/{id}', "UserPanelController@ApplyNow")->name('apply-now');


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

// ------------------------------- link storage ----------------------------

Route::get('/link-storage', function () {
    Artisan::call('storage:link');
});

// ------------------------------- link storage ----------------------------

// ------------------------------- Clear cache ----------------------------

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

// ------------------------------- Clear cache ----------------------------
