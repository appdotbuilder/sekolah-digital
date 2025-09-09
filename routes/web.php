<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PpdbController;
use Illuminate\Support\Facades\Route;
Route::get('/health-check', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toISOString(),
    ]);
})->name('health-check');

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// News routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');

// Extracurricular routes
Route::get('/extracurriculars', [ExtracurricularController::class, 'index'])->name('extracurriculars.index');

// Gallery routes
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Facilities routes
Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities.index');

// PPDB routes
Route::get('/ppdb', [PpdbController::class, 'create'])->name('ppdb.create');
Route::post('/ppdb', [PpdbController::class, 'store'])->name('ppdb.store');
Route::get('/ppdb/success', function () { return view('ppdb.success'); })->name('ppdb.success');

// Feedback routes
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/success', function () { return view('feedback.success'); })->name('feedback.success');

// Dashboard (Admin area)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Admin Settings routes
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::patch('/settings', [SettingController::class, 'update'])->name('settings.update');
    });
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
