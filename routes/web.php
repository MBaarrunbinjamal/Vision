<?php

use Illuminate\Support\Facades\Route;
// user routes start
Route::get('/', function () {
    return view('clients.index');
});
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

//Admin Routes
Route::get('/dashboard',function() {
    return view('admin.dashboard');
});

Route::get('/page2',function(){
return view('admin.page2');

});