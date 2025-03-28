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
    return view('admin.influencer.influencer-list');
})->name('influencerlist');

Route::get('/Admin/Dashboard/Brand-List', function () {
    return view('admin.brand.brand-list');
})->name('brandlist');

Route::get('/Admin/Dashboard/Influencer-status', function () {
    return view('admin.influencer.influencer-status');
})->name('influencerstatus');

Route::get('/Admin/Dashboard/Brand-status', function () {
    return view('admin.brand.brand-status');
})->name('brandstatus');

Route::get('/Admin/Dashboard/Influencers-messages', function () {
    return view('admin.influencer.influencer-message');
})->name('influencermessage');

Route::get('/Admin/Dashboard/Brands-messages', function () {
    return view('admin.brand.brand-message');
})->name('brandmessage');

Route::get('/Admin/Dashboard/Sponsors-messages', function () {
    return view('admin.sponsor.sponsoring-message');
})->name('sponsormessage');

Route::get('/Admin/Dashboard/Pack-list', function () {
    return view('admin.packs.pack-list');
})->name('packlist');

Route::get('/Admin/Dashboard/Pack-add', function () {
    return view('admin.packs.pack-add');
})->name('packadd');

Route::get('/Admin/Dashboard/Pack-edit', function () {
    return view('admin.packs.pack-edit');
})->name('packedit');

Route::get('/Admin/Dashboard/Feature-list', function () {
    return view('admin.features.feature-list');
})->name('featurelist');

Route::get('/Admin/Dashboard/Feature-add', function () {
    return view('admin.features.feature-add');
})->name('featureadd');

Route::get('/Admin/Dashboard/Feature-edit', function () {
    return view('admin.features.feature-edit');
})->name('featureedit');

Route::get('/Admin/Dashboard/Collaboration-list', function () {
    return view('admin.collaborations.collaboration-list');
})->name('collaborationlist');

Route::get('/Admin/Dashboard/Collaboration-add', function () {
    return view('admin.collaborations.collaboration-add');
})->name('collaborationadd');

Route::get('/Admin/Dashboard/Collaboration-edit', function () {
    return view('admin.collaborations.collaboration-edit');
})->name('collaborationedit');

Route::get('/Admin/Dashboard/Influencer-sector-list', function () {
    return view('admin.influencer-sector.influencer-sector-list');
})->name('influencersectorlist');

Route::get('/Admin/Dashboard/Influencer-sector-add', function () {
    return view('admin.influencer-sector.influencer-sector-add');
})->name('influencersectoradd');

Route::get('/Admin/Dashboard/Influencer-sector-edit', function () {
    return view('admin.influencer-sector.influencer-sector-edit');
})->name('influencersectoredit');

Route::get('/Admin/Dashboard/Brand-sector-list', function () {
    return view('admin.brand-sector.brand-sector-list');
})->name('brandsectorlist');

Route::get('/Admin/Dashboard/Brand-sector-add', function () {
    return view('admin.brand-sector.brand-sector-add');
})->name('brandsectoradd');

Route::get('/Admin/Dashboard/Brand-sector-edit', function () {
    return view('admin.brand-sector.brand-sector-edit');
})->name('brandsectoredit');

Route::get('/Admin/Dashboard/Partner-list', function () {
    return view('admin.partners.partner-list');
})->name('partnerlist');

Route::get('/Admin/Dashboard/Partner-add', function () {
    return view('admin.partners.partner-add');
})->name('partneradd');

Route::get('/Admin/Dashboard/Partner-edit', function () {
    return view('admin.partners.partner-edit');
})->name('partneredit');


require __DIR__.'/auth.php';
