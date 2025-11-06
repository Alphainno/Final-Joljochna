<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FooterSettingController;
use App\Http\Controllers\HomeController;


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










