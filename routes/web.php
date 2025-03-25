<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});








Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/influencers', function () {
    return view('pages.influencer');
})->name('influencers');

Route::get('/brands', function () {
    return view('pages.brand');
})->name('brands');

Route::get('/sponsoring', function () {
    return view('forms.sponsor');
})->name('sponsoring');

Route::get('/All-Influencers', function () {
    return view('pages.all-influencers');
})->name('allinfluencers');

Route::get('/All-Brands', function () {
    return view('pages.all-brands');
})->name('allbrands');

Route::get('/Brand-Profil', function () {
    return view('pages.brand-profile');
})->name('brandprofile');

Route::get('/Influencer-Profil', function () {
    return view('pages.influencer-profile');
})->name('influencerprofile');

Route::get('/Brand/Dashboard', function () {
    return view('brand-dashboard.index');
})->name('branddashboard');

Route::get('/Influencer/Dashboard', function () {
    return view('influencer-dashboard.index');
})->name('influencerdashboard');

Route::get('/Admin/Dashboard', function () {
    return view('admin.index');
})->name('admindashboard');

Route::get('/Admin/Dashboard/Influencer-List', function () {
    return view('admin.influencer-list');
})->name('influencerlist');

Route::get('/Admin/Dashboard/Brand-List', function () {
    return view('admin.brand-list');
})->name('brandlist');

Route::get('/Admin/Dashboard/Influencer-status', function () {
    return view('admin.influencer-status');
})->name('influencerstatus');

Route::get('/Admin/Dashboard/Brand-status', function () {
    return view('admin.brand-status');
})->name('brandstatus');



require __DIR__.'/auth.php';
