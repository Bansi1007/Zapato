<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('AboutUs', [CustomAuthController::class, 'AboutUs'])->name('AboutUs');
Route::get('ContactUs', [CustomAuthController::class, 'ContactUs'])->name('ContactUs');
Route::post('ContactUs', [CustomAuthController::class, 'PostForm'])->name('PostForm');
Route::get('Social', [CustomAuthController::class, 'Social'])->name('Social');
Route::get('PaymentsShipping', [CustomAuthController::class, 'PaymentsShipping'])->name('PaymentsShipping');
Route::get('FAQ', [CustomAuthController::class, 'FAQ'])->name('FAQ');
Route::get('locations', [CustomAuthController::class, 'locations'])->name('locations');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::get('products', [CustomAuthController::class, 'products'])->name('products');
Route::get('cancellations', [CustomAuthController::class, 'cancellations'])->name('cancellations');
Route::get('careers', [CustomAuthController::class, 'careers'])->name('careers');
Route::get('support', [CustomAuthController::class, 'support'])->name('support');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('men', [CustomAuthController::class, 'men'])->name('men');
Route::get('women', [CustomAuthController::class, 'women'])->name('women');
Route::get('kids', [CustomAuthController::class, 'kids'])->name('kids');
Route::get('accessories', [CustomAuthController::class, 'accessories'])->name('accessories');
Route::post('customlogin', [CustomAuthController::class, 'customlogin'])->name('customlogin');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::get('/add-to-cart/{id}',[CustomAuthController::class, 'getAddToCart'])->name('addToCart');
Route::get('/shoppingCart',[CustomAuthController::class, 'getShoppingCart'])->name('shoppingCart');
Route::get('/checkout', [CustomAuthController::class,'getCheckout'])->name('checkout');
Route::post('/checkout', [CustomAuthController::class,'postCheckout'])->name('checkout');