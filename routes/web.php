<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HenController;
use App\Http\Controllers\EggController;
use App\Http\Controllers\StockController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name(name:'admin.dashboard');

Route::get('/admin/hens',[HenController::class,'henlist'])->name(name:'admin.hens');
Route::get('/admin/hens/create',[HenController::class,'createhenlist'])->name(name:'admin.hens.create');
Route::post('/admin/hens/store',[HenController::class,'store'])->name(name:'admin.hens.store');


Route::get('/admin/hens/vaccine',[HenController::class,'vaccine'])->name(name:'admin.hens.vaccine');
Route::get('/admin/hens/vaccine/create',[HenController::class,'createvaccine'])->name(name:'admin.hens.vaccine.create');
Route::post('/admin/hens/vaccine/store2',[HenController::class,'store2'])->name(name:'admin.hens.vaccine.store2');


Route::get('/admin/hens/food',[HenController::class,'food'])->name(name:'admin.hens.food');




Route::get('/admin/eggs',[EggController::class,'egglist'])->name(name:'admin.eggs');
Route::get('/admin/eggs/create',[EggController::class,'createegglist'])->name('admin.eggs.create');
Route::post('admin/eggs/store',[EggController::class,'store'])->name(name:'admin.eggs.store');




Route::get('/admin/stock',[StockController::class,'stocklist'])->name(name:'admin.stocks');
Route::get('/admin/stock/create',[StockController::class,'createstocklist'])->name(name:'admin.stock.create');



Route::get('/admin/records',[RecordController::class,'recordlist'])->name(name:'admin.records');
Route::get('/admin/records/create',[RecordController::class,'createrecordlist'])->name(name:'admin.records.create');
Route::post('admin/records/store',[RecordController::class,'store'])->name(name:'admin.records.store');



