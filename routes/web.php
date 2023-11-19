<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\HomeController;

use App\Http\Controller\AdminController;

use App\Http\Controllers\CampgroundController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\AboutController;

use App\Http\Controllers\ReviewController;

 

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect']);

Route::get('/view_catagory', [App\Http\Controllers\AdminController::class, 'view_catagory']);

Route::post('/add_catagory', [App\Http\Controllers\AdminController::class, 'add_catagory']);

Route::get('/delete_catagory/{id}', [App\Http\Controllers\AdminController::class, 'delete_catagory']);

Route::get('/view_product', [App\Http\Controllers\AdminController::class, 'view_product']);

Route::post('/add_product', [App\Http\Controllers\AdminController::class, 'add_product']);

Route::get('/show_product', [App\Http\Controllers\AdminController::class, 'show_product']);

Route::get('/delete_product/{id}', [App\Http\Controllers\AdminController::class, 'delete_product']);

Route::get('/update_product/{id}', [App\Http\Controllers\AdminController::class, 'update_product']);

Route::post('/update_product_confirm/{id}', [App\Http\Controllers\AdminController::class, 'update_product_confirm']);

Route::get('/order', [App\Http\Controllers\AdminController::class, 'order']);

Route::get('/delivered/{id}', [App\Http\Controllers\AdminController::class, 'delivered']);

Route::get('/print_pdf/{id}', [App\Http\Controllers\AdminController::class, 'print_pdf']);

Route::get('/search', [App\Http\Controllers\AdminController::class,'searchdata']);

Route::get('/view_campground', [App\Http\Controllers\AdminController::class, 'view_campground']);

Route::post('/add_campground', [App\Http\Controllers\AdminController::class, 'add_campground']);

Route::get('/show_campground', [App\Http\Controllers\AdminController::class, 'show_campground']);

Route::get('/delete_campground/{id}', [App\Http\Controllers\AdminController::class, 'delete_campground']);

Route::get('/update_campground/{id}', [App\Http\Controllers\AdminController::class, 'update_campground']);

Route::post('/update_campground_confirm/{id}', [App\Http\Controllers\AdminController::class, 'update_campground_confirm']);

Route::get('/catagory_campground', [App\Http\Controllers\AdminController::class, 'catagory_campground']);

Route::post('/add_catagory_campground', [App\Http\Controllers\AdminController::class, 'add_catagory_campground']);

Route::get('/delete_catagory_campground/{id}', [App\Http\Controllers\AdminController::class, 'delete_catagory_campground']);







Route::get('/product_details/{id}', [App\Http\Controllers\HomeController::class, 'product_details']);

Route::post('/add_cart/{id}', [App\Http\Controllers\HomeController::class, 'add_cart']);

Route::get('/show_cart', [App\Http\Controllers\HomeController::class, 'show_cart']);

Route::get('/remove_cart/{id}', [App\Http\Controllers\HomeController::class, 'remove_cart']);

Route::get('/cash_order', [App\Http\Controllers\HomeController::class, 'cash_order']);

Route::get('/stripe/{totalprice}', [App\Http\Controllers\HomeController::class, 'stripe']);

Route::post('stripe/{totalprice}', [App\Http\Controllers\HomeController::class, 'stripePost'])->name('stripe.post');

Route::get('/show_order', [App\Http\Controllers\HomeController::class, 'show_order']);

Route::get('/cancel_order/{id}', [App\Http\Controllers\HomeController::class, 'cancel_order']);

Route::get('/products', [App\Http\Controllers\HomeController::class, 'product']);

Route::get('/product_search', [App\Http\Controllers\HomeController::class, 'product_search']);




Route::get('/campgrounds', [App\Http\Controllers\CampgroundController::class, 'campground']);

Route::get('/campground_detail/{id}', [App\Http\Controllers\CampgroundController::class, 'campground_detail']);

Route::get('/viewcampground', [App\Http\Controllers\CampgroundController::class, 'view_campground']);

Route::post('/add_campground', [App\Http\Controllers\CampgroundController::class, 'add_campground']);

Route::get('/deletecampground/{id}', [App\Http\Controllers\CampgroundController::class, 'delete_campground']);

Route::get('/updatecampground/{id}', [App\Http\Controllers\CampgroundController::class, 'update_campground']);

Route::post('/update_campground_confirm/{id}', [App\Http\Controllers\CampgroundController::class, 'update_campground_confirm']);









Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact']);



Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);



Route::post('/campgrounds/{campgroundId}/reviews', [ReviewController::class, 'create'])->name('reviews.create');

Route::delete('/campgrounds/{campgroundId}/reviews/{reviewId}', [ReviewController::class, 'delete'])->name('reviews.destroy');


