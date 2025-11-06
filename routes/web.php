<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FooterSettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'landingPage'])->name('home');

Route::get('/about', [HomeController::class, 'aboutPage'])->name('about');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/projects',[HomeController::class, 'othersProjects'])->name('projects');

// Admin: Footer settings
Route::post('/admin/footer-settings', [FooterSettingController::class, 'store'])->name('admin.footer-settings.store');

// API: Get footer settings
Route::get('/api/footer-settings', function() {
    $settings = \App\Models\FooterSetting::first();
    if (!$settings) {
        return response()->json(['error' => 'No footer settings found'], 404);
    }
    return response()->json($settings);
})->name('api.footer-settings');

// Testimonials API routes
Route::get('/api/testimonials', [TestimonialController::class, 'index'])->name('api.testimonials.index');
Route::post('/admin/testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
Route::put('/admin/testimonials/{id}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
Route::delete('/admin/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');

// Auth routes (simple session-based)
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');










