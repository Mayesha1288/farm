<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/admin/hens',[HenController::class,'henlist'])->name(name:'admin.hens');
Route::get('/admin/hens/create',[HenController::class,'createhenlist'])->name(name:'admin.hens.create');
Route::post('/admin/hens/store',[HenController::class,'store'])->name(name:'admin.hens.store');



Route::get('/admin/eggs',[EggController::class,'egglist'])->name(name:'admin.eggs');
Route::get('/admin/eggs/create',[EggController::class,'createegglist'])->name('admin.eggs.create');
Route::post('admin/eggs/store',[EggController::class,'store'])->name(name:'admin.eggs.store');




Route::get('/admin/stock',[StockController::class,'stocklist'])->name(name:'admin.stocks');
Route::get('/admin/stock/create',[StockController::class,'createstocklist'])->name(name:'admin.stock.create');



Route::get('/admin/records',[RecordController::class,'recordlist'])->name(name:'admin.records');
Route::get('/admin/records/create',[RecordController::class,'createrecordlist'])->name(name:'admin.records.create');



