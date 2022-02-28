<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::prefix('brand')->group(function(){
    Route::get('/',[BrandController::class,'index'])->name('brand.index');
    Route::get('/create',[BrandController::class,'create'])->name('brand.create');
    Route::post('/create',[BrandController::class,'store'])->name('brand.store');
    Route::get('{id}/create',[BrandController::class,'show'])->name('brand.detail');
    Route::get('{id}/delete',[BrandController::class,'destroy'])->name('brand.delete');
    Route::get('/{id}/eidt',[BrandController::class,'edit'])->name('brand.eidt');
    Route::post('/{id}/update',[BrandController::class,'update'])->name('brand.update');
});

