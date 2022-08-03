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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----------------------------------------User routes ----------------------------------------

// ===================== HOMEPAGE======================

Route::get('/', "UserPanelController@index");

// ============================== HOMEPAGE ===============

// ===================== SOLUTION ======================

Route::get('/solutions', "UserPanelController@solutions")->name('solutions');
Route::get('/solutions-agrigate-center', "UserPanelController@AgrigateCenter")->name('agrigate-center');


// ============================== SOLUTION ===============

// ----------------------------------------------------------------- Auth routes ----------------------------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('admin.admin-content.dashboard.index');
});

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


// ----------------------------------------------------------------- Auth routes ----------------------------------------------------------------------------------
