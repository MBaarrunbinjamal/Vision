<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Middleware\Adminmiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\Admin\UserStatsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\googlecontroller;

// User routes start
Route::get('/', [ReviewsController::class, 'showReviews']);
Route::get('/google/auth',[googlecontroller::class,('googlepage')]);
Route::get('auth/google/callback',[googleController::class,('googlecallback')]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/about', function () {
        return view('clients.about');
    });

    Route::post('/reviews', [ReviewsController::class, 'store'])->name('reviews.store');
    Route::get('/reviews', [ReviewsController::class, 'showReviews'])->name('reviews.showReviews');

    Route::get('/blog-single', function () {
        return view('clients.blog-single');
    });

    Route::get('/blog', function () {
        return view('clients.blog');
    });
 Route::get('/cselect', [CareerController::class, 'getStudyMaterialsByCareer']);
    
Route::post('/save-career', [CareerController::class, 'store']);
 Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
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

    Route::get('/blog', [BlogController::class, 'getblogs']);
    Route::post('/abc/{id}', [BlogController::class, 'fullblog']);

    Route::get('/reviews', function () {
        return view('clients.reviews');
    });

    // Comments
    Route::post('/submit-comment', [CommentController::class, 'store'])
        ->middleware('auth')
        ->name('comment.store');

    Route::delete('/delete-comment/{id}', [CommentController::class, 'destroy'])
        ->middleware('auth')
        ->name('comment.destroy');
});
// User routes end

// Admin routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), Adminmiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.admindashboard');
    });
     Route::get('/ustudy', function () {
        return view('admin.uploadstudymaterials');
    });
    Route::post('/uploadstudymaterial', [CareerController::class, 'uploadstudymaterial']);

    Route::get('/form', function () {
        return view('admin.form');
    });

    Route::post('/ask-ai', [AiController::class, 'store']);

    Route::get('/addblogs', function () {
        return view('admin.addblogs');
    });

    Route::get('/question', function () {
        return view('admin.question');
    });

    // Users
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/users/export/excel', [AdminUserController::class, 'exportExcel'])->name('admin.users.export.excel');
    Route::get('/users/export/pdf', [AdminUserController::class, 'exportPdf'])->name('admin.users.export.pdf');

    // Reviews
    Route::get('/reviews', [AdminUserController::class, 'showReviews'])->name('admin.reviews');
    Route::post('/reviews/{id}/status/{status}', [AdminUserController::class, 'updateReviewStatus'])->name('admin.reviews.status');
    Route::delete('/reviews/{id}/delete', [AdminUserController::class, 'deleteReview'])->name('admin.reviews.delete');

    // AI Questions
    Route::get('/question', [AiController::class, 'bringapi']);
    Route::delete('/delete-question/{id}', [AiController::class, 'deleteQuestion']);

    // Blogs
    Route::post('/addblog', [BlogController::class, 'addblog']);
});

// CV routes
Route::get('/cv', [CVController::class, 'index'])->name('cv.form');
Route::post('/store', [CVController::class, 'store'])->name('cv.store');
Route::get('/preview/{id}', [CVController::class, 'preview'])->name('cv.preview');
Route::get('/cv/template/{name}', function ($name) {
    abort_unless(view()->exists("cv.templates.$name"), 404);
    return view("cv.templates.$name");
});
Route::get('/cv/{id}', [CVController::class, 'show'])->name('cv.show');
Route::get('/cv/{id}/download', [CVController::class, 'downloadPdf'])->name('cv.download');

Route::get('/404', function () {
    return view('404');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/user-stats', [UserStatsController::class, 'index'])->name('admin.user-stats');
});

Route::view('/glorii', 'clients.Glorii');
