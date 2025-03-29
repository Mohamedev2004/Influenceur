<?php

use App\Http\Controllers\Admin_influencerController;
use App\Http\Controllers\AdminBrandController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminpackController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\AdminfeatureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    // Guest routes
    Route::middleware('guest')->group(function () {
        Route::get('/', [GuestController::class, 'index'])->name('welcome');
        Route::get('/show/{id}', [GuestController::class, 'show_brand'])->name('show_brand_guest');

        Route::view('/Brand-Profil', 'pages.brand-profile')->name('brandprofile');
        Route::view('/influencers', 'pages.influencer')->name('influencers');
        Route::view('/brands', 'pages.brand')->name('brands');
        Route::view('/sponsoring', 'forms.sponsor')->name('sponsoring');
        Route::view('/All-Influencers', 'pages.all-influencers')->name('allinfluencers');
        Route::view('/All-Brands', 'pages.all-brands')->name('allbrands');
    });

    // Admin routes

    Route::get('/Admin/Dashboard', function () {
        return view('admin.index');
    })->name('admindashboard');

    // Route::get('/Admin/Dashboard/Influencer-List', function () {
    //     return view('admin.influencer.influencer-list');
    // })->name('influencerlist');


    Route::get('/Admin/Dashboard/Influencer-List', [Admin_influencerController::class, 'index'])->name('influencerlist');
    Route::delete('/Admin/Dashboard/Influencer-List/{id}', [Admin_influencerController::class, 'destroy'])->name('influencers.destroy');
    Route::get('/Admin/Dashboard/Influencer-Status/{id}', [Admin_influencerController::class, 'showStatusForm'])->name('influencerstatus');
    Route::put('/Admin/Dashboard/Influencer-Status/{id}', [Admin_influencerController::class, 'updateStatus'])->name('influencerstatus.update');






    Route::get('/Admin/Dashboard/Brand-List', [AdminBrandController::class, 'index'])->name('brandlist');
    Route::delete('/admin/brands/{id}', [AdminBrandController::class, 'destroy'])->name('brands.destroy');
    Route::get('/Admin/Dashboard/Brand-Status/{id}', [AdminBrandController::class, 'showStatusForm'])->name('brandstatus');
    Route::put('/Admin/Dashboard/Brand-Status/{id}', [AdminBrandController::class, 'updateStatus'])->name('brandstatus.update');




    Route::get('/Admin/Dashboard/Pack-list', [AdminpackController::class, 'index'])->name('packlist');
    Route::delete('/Admin/Dashboard/Packs/{id}', [AdminpackController::class, 'destroy'])->name('packdestroy');
    Route::post('/Admin/Dashboard/Packs', [AdminpackController::class, 'store'])->name('packstore');
    Route::get('/Admin/Dashboard/Packs/Add', [AdminpackController::class, 'create'])->name('packadd');
    Route::get('/edit/{id}', [AdminPackController::class, 'edit'])->name('packedit');
    Route::put('/update/{id}', [AdminPackController::class, 'update'])->name('packupdate');



    Route::get('/Admin/Dashboard/Feature-list', [AdminfeatureController::class, 'index'])->name('featurelist'); // List all features
    Route::delete('/Admin/Dashboard/Features/{id}', [AdminfeatureController::class, 'destroy'])->name('featuredestroy'); // Delete a feature
    Route::post('/Admin/Dashboard/Features', [AdminfeatureController::class, 'store'])->name('featurestore'); // Store a new feature
    Route::get('/Admin/Dashboard/Features/Add', [AdminfeatureController::class, 'create'])->name('featureadd'); // Show add feature form
    Route::get('/Admin/Dashboard/Features/Edit/{id}', [AdminfeatureController::class, 'edit'])->name('featureedit'); // Show edit feature form
    Route::put('/Admin/Dashboard/Features/Update/{id}', [AdminfeatureController::class, 'update'])->name('featureupdate'); // Update feature







    // Route::get('/Admin/Dashboard/Brand-List', function () {
    //     return view('admin.brand.brand-list');
    // })->name('brandlist');

    // Route::get('/Admin/Dashboard/Influencer-status', function () {
    //     return view('admin.influencer.influencer-status');
    // })->name('influencerstatus');

    // Route::get('/Admin/Dashboard/Brand-status', function () {
    //     return view('admin.brand.brand-status');
    // })->name('brandstatus');

    Route::get('/Admin/Dashboard/Influencers-messages', function () {
        return view('admin.influencer.influencer-message');
    })->name('influencermessage');

    Route::get('/Admin/Dashboard/Brands-messages', function () {
        return view('admin.brand.brand-message');
    })->name('brandmessage');

    Route::get('/Admin/Dashboard/Sponsors-messages', function () {
        return view('admin.sponsor.sponsoring-message');
    })->name('sponsormessage');

    // Route::get('/Admin/Dashboard/Pack-list', function () {
    //     return view('admin.packs.pack-list');
    // })->name('packlist');

    // Route::get('/Admin/Dashboard/Pack-add', function () {
    //     return view('admin.packs.pack-add');
    // })->name('packadd');

    // Route::get('/Admin/Dashboard/Pack-edit', function () {
    //     return view('admin.packs.pack-edit');
    // })->name('packedit');

    // Route::get('/Admin/Dashboard/Feature-list', function () {
    //     return view('admin.features.feature-list');
    // })->name('featurelist');

    // Route::get('/Admin/Dashboard/Feature-add', function () {
    //     return view('admin.features.feature-add');
    // })->name('featureadd');

    // Route::get('/Admin/Dashboard/Feature-edit', function () {
    //     return view('admin.features.feature-edit');
    // })->name('featureedit');

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

    // Influencer routes
    Route::prefix('/influencer')->middleware(['auth', 'influencer'])->group(function () {
        Route::get('/', [GuestController::class, 'index'])->name('influencer_welcome');
        Route::get('/dashboard', [InfluencerController::class, 'dashboard'])->name('influencer_dashboard');
        Route::get('/dash', [InfluencerController::class, 'display'])->name('influencer_display');

        Route::fallback(function () {
            return redirect()->route('influencer_welcome');
        });
    });

    // Brand routes
    Route::prefix('/brand')->middleware(['auth', 'brand'])->group(function () {
        Route::get('/', [GuestController::class, 'index'])->name('brand_dashboard');
        Route::get('/profile', [BrandController::class, 'dashboard'])->name('brand_display');
        Route::fallback(function () {
            return redirect()->route('brand_dashboard');
        });
    });

    Route::middleware('auth')->group(function () {
        Route::get('/show/{id}', [GuestController::class, 'show_brand'])->name('show_brand_auth');
    });



    // Authentication Routes
    require __DIR__ . '/auth.php';
});
