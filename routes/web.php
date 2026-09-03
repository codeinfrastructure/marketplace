<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


// ========================================
// HOME / LOGIN
// ========================================

// Redirect "/" to the login page
Route::get('/', function () {
    return redirect()->route('login');
});


// Show login page
Route::get('/login', function () {
    return view('login');
})->name('login');


// Process login
Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.authenticate');


// ========================================
// REGISTER
// ========================================

// Show registration page
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');


// Process registration
Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');


// ========================================
// AUTHENTICATED ROUTES
// ========================================

Route::middleware('auth')->group(function () {

    // ========================================
    // HOME / MARKETPLACE
    // ========================================

    Route::get('/home', function () {

        $featuredProducts = Product::latest()->get();

        return view('home', compact('featuredProducts'));

    })->name('home');


    // ========================================
    // PRODUCTS
    // ========================================

    // All products
    Route::get('/products', function () {

        $featuredProducts = Product::latest()->get();

        return view('products', compact('featuredProducts'));

    })->name('products');


    // Single product
    Route::get('/products/{product}', [ProductController::class, 'show'])
        ->name('products.show');


    // ========================================
    // SEARCH
    // ========================================

    Route::get('/search', function () {
        return view('search');
    })->name('search');


    // ========================================
    // ABOUT
    // ========================================

    Route::get('/about', function () {
        return view('about');
    })->name('about');


    // ========================================
    // TEST EMAIL
    // ========================================

    // Show test email page
    Route::get('/test-email', function () {
        return view('test-email');
    })->name('test.email.page');


    // Send test email
    Route::post('/test-email', function () {

        $testUser = new \App\Models\User();

        $testUser->name = 'Test User';
        $testUser->email = 'jaspersleurink08@gmail.com';

        Mail::to($testUser->email)
            ->send(
                new \App\Mail\RegistrationConfirmation($testUser)
            );

        return redirect()
            ->route('test.email.page')
            ->with('success', 'Test email sent successfully!');

    })->name('test.email');


    // ========================================
    // LOGOUT
    // ========================================

    Route::post('/logout', function () {

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');

    })->name('logout');

});