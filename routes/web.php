<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', "UserPanelController@index")->name('homepage');
Route::get('/source-from-us', "UserPanelController@Source")->name('source');
Route::get('/work-with-us', "UserPanelController@Work")->name('work');


// ============================== HOMEPAGE ===============

// ===================== SOLUTION ======================

Route::get('/solutions', "UserPanelController@solutions")->name('solutions');
Route::get('/solutions-agrigate-center', "UserPanelController@AgrigateCenter")->name('agrigate-center');
// ============================== SOLUTION ===============

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

// --------------------------------------- Auth routes ----------------------------------------

Route::get('/dashboard', function (){
    return view('admin.admin-content.dashboard.index');
});

// --------------------------------------- Auth routes ----------------------------------------
