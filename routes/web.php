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

//home
Route::get('/index', function () {
    return view('home');
});

//product
Route::prefix('/category')->group(function(){
    Route::get('/product',function(){
        return view('product');
    });
});

//news
Route::get('/news/{id}', function ($id) {
    if($id=='covid')
    return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    else if($id ==0){
        return view('news');
    }
});

//program
Route::prefix('/category')->group(function(){
    Route::get('/program',function(){
        return view('program');
    });
});

//aboutus
Route::get('/about-us', function () {
    return view('about-us');
});

//contactus
use App\Http\Controllers\Controller;

Route::resource('contact', Controller::class)->only([
    'index'
]);
    