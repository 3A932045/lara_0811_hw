<?php

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

/**
 * 首頁
 */
Route::get('/', function () {
    return view('welcome');
})->name('home.index');
/**
 * 關於本站
 */
Route::get('/about',function (){
    return view('welcome');
})->name('about.index');
/**
 * 最新消息
 */
Route::get('/news',function (){
    return view('welcome');
})->name('news.index');
/**
 * 串接Controller
 */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/news',[NewsController::class,'index'])->name('news.index');
