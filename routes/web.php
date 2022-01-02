<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HenController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\EggController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecordController;



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

Route::get('/',[LoginController::class,'login'])->name('admin.login');
Route::post('/login',[LoginController::class,'doLogin'])->name('admin.doLogin');
Route::group(['prefix'=>'admin'],function (){

   

    Route::group(['middleware'=>'auth'],function (){
    Route::get('/', function () {
        return view('admin.welcome');
    })->name('welcome');

    Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');



// Route::get('/', function () {
//     return view('welcome');
// });

// first we write get to view the page and post for submitimg orinserting the data, after that we write the contoller 
// then the class and then the method name then write the name which is shown in the url 

Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');



// all routes of hen

Route::get('/admin/hens',[HenController::class,'henlist'])->name('admin.hens');
Route::get('/admin/hens/create',[HenController::class,'createhenlist'])->name('admin.hens.create');
Route::post('/admin/hens/store',[HenController::class,'store'])->name('admin.hens.store');
Route::get('hen/view/{hen_id}',[HenController::class,'henDetails'])->name('admin.hen.details');
Route::get('hen/delete/{hen_id}',[HenController::class,'henDelete'])->name('admin.hen.delete');
Route::get('admin/edit/{hen_id}',[HenController::class,'henEdit'])->name('admin.hen.edit');
Route::put('admin/update/{hen_id}',[HenController::class,'henUpdate'])->name('admin.hen.update');
Route::get('admin/hen/search',[HenController::class,'henSearch'])->name('admin.hen.search');





// all routes of hen vaccine

Route::get('/admin/hens/vaccine',[HenController::class,'vaccine'])->name('admin.hens.vaccine');
Route::get('/admin/hens/vaccine/create',[HenController::class,'createvaccine'])->name('admin.hens.vaccine.create');
Route::post('/admin/hens/vaccine/store2',[HenController::class,'store2'])->name('admin.hens.vaccine.store2');







// all routes of  food 
Route::get('/admin/hens/food',[HenController::class,'food'])->name('admin.hens.food');
Route::get('/admin/hens/food/create',[HenController::class,'createfood'])->name('admin.hens.food.create');
Route::post('/admin/hens/food/store3',[HenController::class,'store3'])->name('admin.hens.food.store3');





// all type of hentype

Route::get('/admin/hentype',[TypeController::class,'hentype'])->name('admin.hentype');
Route::get('/admin/hentype/create',[TypeController::class,'createhentype'])->name('admin.hentype.create');
Route::post('/admin/hentype/store',[TypeController::class,'store'])->name('admin.hentype.store');


Route::get('/admin/eggtype',[TypeController::class,'eggtype'])->name('admin.eggtype');
Route::get('/admin/eggtype/create',[TypeController::class,'createeggtype'])->name('admin.eggtype.create');
Route::post('/admin/eggtype/store2',[TypeController::class,'store2'])->name('admin.eggtype.store2');



// routes of egg

Route::get('/admin/eggs',[EggController::class,'egglist'])->name('admin.eggs');
Route::get('/admin/eggs/create',[EggController::class,'createegglist'])->name('admin.eggs.create');
Route::post('/admin/eggs/store',[EggController::class,'store'])->name('admin.eggs.store');
Route::get('egg/view/{egg_id}',[EggController::class,'eggDetails'])->name('admin.egg.details');
Route::get('egg/delete/{egg_id}',[EggController::class,'eggDelete'])->name('admin.egg.delete');
Route::get('admin/egg/search',[EggController::class,'eggSearch'])->name('admin.egg.search');






Route::get('/admin/stock',[StockController::class,'stocklist'])->name('admin.stocks');
Route::get('/admin/stock/create',[StockController::class,'createstocklist'])->name('admin.stock.create');
Route::get('/stock/details/{id}',[StockController::class,'stockDetails'])->name('admin.stock.details');







Route::get('/admin/customer',[CustomerController::class,'customer'])->name('admin.customer');
Route::get('/admin/customer/create',[CustomerController::class,'createcustomer'])->name('admin.customer.create');
Route::post('admin/customer/store',[CustomerController::class,'store'])->name('admin.customer.store');
Route::get('customer/view/{customer_id}',[CustomerController::class,'customerDetails'])->name('admin.customer.details');







Route::get('/admin/records',[RecordController::class,'recordlist'])->name('admin.records');
Route::get('/admin/records/create',[RecordController::class,'createrecordlist'])->name('admin.records.create');
Route::post('admin/records/store',[RecordController::class,'store'])->name('admin.records.store');
Route::get('admin/view/{record_id}',[RecordController::class,'recordDetails'])->name('admin.record.details');
Route::get('admin/delete/{record_id}',[RecordController::class,'recordDelete'])->name('admin.record.delete');
Route::get('admin/record/edit/{record_id}',[RecordController::class,'recordEdit'])->name('admin.record.edit');
Route::put('admin/record/update/{record_id}',[RecordController::class,'recordUpdate'])->name('admin.record.update');
Route::get('admin/record/search',[RecordController::class,'recordSearch'])->name('admin.record.search');



    });
});