<?php

use App\Http\Controllers\AgencyManager;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\AgencyManager::class,'index'])->name('agency.index');
Route::post('/',[AgencyManager::class,'search'])->name('agency.search');
Route::get('/add',[AgencyManager::class,'create'])->name('agency.create');
Route::post('/add',[AgencyManager::class,'store'])->name('agency.store');
Route::get('/edit/{id}',[AgencyManager::class,'edit'])->name('agency.edit');
Route::post('/edit/{id}',[AgencyManager::class,'update'])->name('agency.update');
Route::get('/delete/{id}',[AgencyManager::class,'destroy'])->name('agency.destroy');
Route::get('/dashboard',function (){
    return view('dashboard');
});
