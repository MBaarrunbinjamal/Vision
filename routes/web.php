<?php

use App\Http\Middleware\Adminmiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// user routes start
Route::get('/', function () {
    return view('clients.index');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   

Route::get('/about', function () {
    return view('clients.about');
});
Route::get('/blog-single', function () {
    return view('clients.blog-single');
});
Route::get('/blog', function () {
    return view('clients.blog');
});
Route::get('/contact', function () {
    return view('clients.contact');
});
Route::post('/contact', [App\Http\Controllers\ConatctController::class, 'store'])->name('contact.store');
Route::get('/counselor', function () {
    return view('clients.counselor');
});
Route::get('/main', function () {
    return view('clients.main');
});
Route::get('/nav', function () {
    return view('clients.navbar');
});
Route::get('/pricing', function () {
    return view('clients.pricing');
});
Route::get('/service', function () {
    return view('clients.services');
});
// clients routes end


});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), Adminmiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.admindashboard');                                
    });

    Route::get('/addblogs', function () {
        return view('admin.addblogs');
    });
   
});
Route::get('/404', function () {
        return view('404');
    });

