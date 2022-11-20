<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\DonateController;

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
    return view('frontend/pages/home');
})->name('home');

Route::get('/charity-foundations', function () {
    return view('frontend/pages/charity-foundations');
})->name('charity.foundations');

Route::get('/children-of-war', function () {
    return view('frontend/pages/children-war');
})->name('children-war');

Route::get('/about-us', function () {
    return view('frontend/pages/about');
})->name('about');

Route::get('donate', [DonateController::class, 'donateCreate'])->name('donate.create');
Route::post('donate/store', [DonateController::class, 'donateStore'])->name('donate.store');

Route::get('Children-stories', [PageController::class, 'childrenStories'])->name('children.stories');
Route::get('Children-stories-details/{slug}', [PageController::class, 'childrenStoriesDetails'])->name('children.stories.details');
Route::get('contact-us', [PageController::class, 'contactUs'])->name('contact.us');

Route::get('/dashboard', function () {
    return view('backend/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth', 'verified']], function (){
	
    Route::resource('/posts', PostController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/contact', ContactController::class);

});

require __DIR__.'/auth.php';
