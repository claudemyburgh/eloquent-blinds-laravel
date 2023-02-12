<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\CatalogPageController;
use App\Http\Controllers\ContactFormSendController;
use App\Http\Controllers\ContactUsPageController;
use App\Http\Controllers\Dashboard\CategoriesControllers;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\DeleteMediaController;
use App\Http\Controllers\Dashboard\VariantsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductShow;
use App\Http\Controllers\ProductIndexController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', HomePageController::class)->name('home');
Route::get('/about-us', AboutUsPageController::class)->name('about-us');
Route::get('/contact-us', ContactUsPageController::class)->name('contact-us');

Route::get('/catalog', CatalogPageController::class)->name('catalog.index');
Route::get('/category/{category:slug}', ProductIndexController::class)->name('products.index');
Route::get('/product/{category:slug}/{product:slug}', ProductShow::class)->name('product.show');


Route::post('/contact-send', ContactFormSendController::class)->name('contact.send');


Route::group([
    'middleware' => ['auth', 'verified'],
    'as' => 'dashboard.',
    'prefix' => '/dashboard',
    'namespace' => "App\Http\Controllers\Dashboard"
    ], function() {
    Route::get('/', \App\Http\Controllers\Dashboard\DashboardController::class)->name('index');
    Route::resource('categories', CategoriesControllers::class);
    Route::resource('products', ProductsController::class);
    Route::delete('/media/{media}/delete', DeleteMediaController::class)->name('media.delete');

    Route::resource('/{product}/variants', VariantsController::class);
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
