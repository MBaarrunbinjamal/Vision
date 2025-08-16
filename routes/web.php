<?php
use App\Http\Controllers\AdminUserController;
use App\Http\Middleware\Adminmiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReviewsController;

// user routes start
Route::get('/', [ReviewsController::class, 'showReviews']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   
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

    Route::get('/blog',[BlogController::class,('getblogs')]);
    Route::post('/abc/{id}',[BlogController::class,('fullblog')]);

    Route::get('/reviews', function () {
        return view('clients.Reviews');
    });

    // Comments
    Route::post('/submit-comment', [CommentController::class, 'store'])
        ->middleware('auth')
        ->name('comment.store');

    // 🔽 Added delete comment route
    Route::delete('/delete-comment/{id}', [CommentController::class, 'destroy'])
        ->middleware('auth')
        ->name('comment.destroy');
});
// clients routes end


// Admin routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), Adminmiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.admindashboard');                                
    });

    Route::get('/users', function () {
        return view('admin.users');
    });

    Route::get('/form', function () {
        return view('admin.form');
    });

    Route::post('/ask-ai', [AiController::class,'store']);

    Route::get('/addblogs', function () {
        return view('admin.addblogs');
    });

    Route::get('/question', function () {
        return view('admin.question');
    });

    Route::get('/reviews', [AdminUserController::class, 'showReviews'])->name('admin.reviews');
    Route::post('/reviews/{id}/status/{status}', [AdminUserController::class, 'updateReviewStatus'])
         ->name('admin.reviews.status');
    Route::delete('/reviews/{id}/delete', [AdminUserController::class, 'deleteReview'])->name('admin.reviews.delete');

    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users');
    Route::post('/addblog',[BlogController::class,('addblog')]);   
    Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/question', [AiController::class, 'bringapi']);
    Route::delete('/delete-question/{id}', [AiController::class, 'deleteQuestion']);
    Route::get('/users/export/excel', [AdminUserController::class, 'exportExcel'])->name('admin.users.export.excel');
    Route::get('/users/export/pdf', [AdminUserController::class, 'exportPdf'])->name('admin.users.export.pdf');
});

Route::get('/404', function () {
    return view('404');
});
