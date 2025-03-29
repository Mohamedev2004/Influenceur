@extends('layouts.app')

@section('content')

<!-- breadcrumb area -->
<div class="rts__section breadcrumb__background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative d-flex justify-content-between align-items-center">
                <div class="breadcrumb__area max-content breadcrumb__padding z-2">
                    <h1 class="breadcrumb-title h3 mb-3 text-white">Influenceurs</h1>
                    <nav>
                        <ul class="breadcrumb m-0 lh-1">
                            <li class="breadcrumb-item"><a style="color: white !important;" href="index.html">Acceuil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Influenceurs</li>
                        </ul>
                    </nav>
                </div>
                <div class="breadcrumb__area__shape d-flex gap-4 justify-content-end align-items-center">
                    <div class="shape__one common">
                        <img src="assets/img/breadcrumb/shape-1.svg" alt="">
                    </div>
                    <div class="shape__two common">
                        <img src="assets/img/breadcrumb/shape-2.svg" alt="">
                    </div>
                    <div class="shape__three common">
                        <img src="assets/img/breadcrumb/shape-3.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- influencer list one -->
<div class="rts__section section__padding">
    <div class="container">
        <div class="row g-30">
            <div class="col-lg-5 col-xl-4">
                <div class="job__search__section mb-40">
                    <form action="#" class="d-flex flex-column row-30">
                        <div class="search__item">
                            <label for="search" class="mb-20 font-20 fw-medium text-dark text-capitalize">Rechercher par nom</label>
                            <div class="position-relative">
                                <input type="text" id="search" placeholder="Entrez le nom de l'influenceur(Euse)" required>
                            </div>
                        </div>

                        <div class="search__item">
                            <h6 class="mb-2 font-20 fw-medium text-dark text-capitalize">Rechercher par domaine</h6>
                            <div class="position-relative">
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Domaine</span>
                                    <ul class="list">
                                        <li data-value="1" class="option">Vlogs</li>
                                        <li data-value="2" class="option">Fitness</li>
                                        <li data-value="3" class="option">Beauty</li>
                                        <li data-value="4" class="option">Lifestyle</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- job category -->
                        <!-- candidate gender -->
                        <div class="search__item">
                            <h6 class="mb-2 font-20 fw-medium text-dark text-capitalize">Sex</h6>
                            <div class="search__item__list">
                                <div class="d-flex align-items-center justify-content-between list">
                                    <div class="d-flex gap-2 align-items-center checkbox">
                                        <input type="checkbox" name="female" id="female">
                                        <label for="female">Feminin</label>
                                    </div>
                                    <span>(80)</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between list">
                                    <div class="d-flex gap-2 align-items-center checkbox">
                                        <input type="checkbox" name="male" id="male">
                                        <label for="male">Masculin</label>
                                    </div>
                                    <span>(150)</span>
                                </div>
                            </div>
                        </div>
                        <!-- candidate gender end -->

                        <!-- salary label -->
                        <div class="search__item">
                            <h6 class="mb-2 font-20 fw-medium text-dark text-capitalize">Nombre d'abonnés</h6>
                            <div class="search__item__list">

                                <div class="d-flex align-items-center justify-content-between list">
                                    <div class="d-flex gap-2 align-items-center checkbox">
                                        <input type="checkbox" name="500" id="500">
                                        <label for="500">50K</label>
                                    </div>
                                    <span>(10)</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between list">
                                    <div class="d-flex gap-2 align-items-center checkbox">
                                        <input type="checkbox" name="5000" id="5000">
                                        <label for="5000">50K - 100K</label>
                                    </div>
                                    <span>(44)</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between list">
                                    <div class="d-flex gap-2 align-items-center checkbox">
                                        <input type="checkbox" name="1000" id="1000">
                                        <label for="1000">100K - 500K</label>
                                    </div>
                                    <span>(27)</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between list">
                                    <div class="d-flex gap-2 align-items-center checkbox">
                                        <input type="checkbox" name="1500" id="1500">
                                        <label for="1500">500K - 1M</label>
                                    </div>
                                    <span>(85)</span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="rts__btn no__fill__btn max-content mx-auto job__search__btn font-sm " aria-label="Search">Trouver l'Influenceur(Euse)</button>
                    </form>
                </div>
            </div>




            <div class="col-lg-7 col-xl-8">
                <div class="top__query mb-40 d-flex flex-wrap gap-4 gap-xl-0 justify-content-between align-items-center">
                    <span class="text-dark font-20 fw-medium">Affichage de 8 marques par page</span>
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <form action="#" class="category-select">
                            <div class="position-relative">
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Domaine</span>
                                    <ul class="list">
                                        <li data-value="1" class="option">Doamaine</li>
                                        <li data-value="2" class="option">Doamaine</li>
                                        <li data-value="3" class="option">Doamaine</li>
                                        <li data-value="4" class="option">Doamaine</li>
                                        <li data-value="5" class="option">Doamaine</li>
                                        <li data-value="6" class="option">Doamaine</li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex align-items-center gap-3" id="nav-tab" role="tablist">
                            <button class="rts__btn no__fill__btn grid-style nav-link active" data-bs-toggle="tab" data-bs-target="#grid">Grid</button>
                            <button class="rts__btn no__fill__btn list-style nav-link" data-bs-toggle="tab" data-bs-target="#list">List</button>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" role="tabpanel" id="grid">
                        <div class="row g-30">
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/1.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Al Amin Bali</a>
                                            <span class="author">UX Designer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                    Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/2.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Jonathon Doe</a>
                                            <span class="author">UX Designer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                    Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/3.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Jack Alexander</a>
                                            <span class="author">UX Designer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                    Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/4.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Oliver Josef</a>
                                            <span class="author">Web Developer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                    Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/1.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Al Amin Bali</a>
                                            <span class="author">UX Designer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                    Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/2.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Jonathon Doe</a>
                                            <span class="author">UX Designer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                    Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/3.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Jack Alexander</a>
                                            <span class="author">UX Designer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                    Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                            <!-- single candidate -->
                            <div class="col-xl-6 col-md-6 col-lg-12">
                                <div class="rts__author__card style__default d-flex flex-column gap-3">
                                    <div class="author_icon">
                                        <img src="assets/img/author/4.svg" class="rounded-5" alt="">
                                    </div>
                                    <div class="job__meta w-100 d-flex flex-column gap-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <a href="{{route('influencerprofile')}}" class="job__title h6 mb-0">Oliver Josef</a>
                                            <span class="author">Web Developer</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                                            <div class="d-flex gap-2 align-items-center">
                                                Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                Full Time
                                            </div>
                                        </div>
                                        <div class="job__tags d-flex justify-content-center mb-3 flex-wrap gap-3">
                                            <a href="#">Figma</a>
                                            <a href="#">Photoshop</a>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn max-content">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single candidate end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="list">
                        <div class="row g-30">
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/1.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Michael Roy</a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-4 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/2.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Jonathon Doe</a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-5 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/1.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Jack Alexander </a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-5 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/1.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Oliver Josef </a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-5 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/8.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Emma Roy</a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-5 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/8.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Anastacia Alice</a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-5 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/1.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Jack Alexander </a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-5 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                            <!-- author card -->
                            <div class="col-12">
                                <div class="rts__author__card__big style__gradient__two flex-wrap d-flex justify-content-between align-items-center gap-3">
                                    <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-start
                                        align-items-start align-items-md-center">
                                        <div class="author__icon">
                                            <img src="assets/img/author/1.svg" alt="">
                                        </div>
                                        <div class="job__meta">
                                            <div class="d-flex align-items-start flex-column">
                                                <a href="{{route('influencerprofile')}}" class="job__title mb-0 h6 fw-semibold">Oliver Josef </a>
                                                <span class="d-block fw-medium">Software Engineer</span>
                                            </div>
                                            <div class="job__tags mt-3 d-flex flex-wrap gap-3">
                                                <a href="#">Creative</a>
                                                <a href="#">web ui</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex gap-5 flex-wrap align-items-center">
                                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                                            <div class="d-flex gap-2 align-items-center">
                                                    Newyork, USA
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <i class="fa-light rt-briefcase"></i> Full Time
                                            </div>
                                        </div>
                                        <a href="{{route('influencerprofile')}}" class="apply__btn" aria-label="View Profile">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- author card end -->
                        </div>
                    </div>
                </div>

                <div class="rts__pagination mx-auto pt-60 max-content">
                    <ul class="d-flex gap-2">
                        <li><a href="#" class="inactive"><i class="rt-chevron-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="rt-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job list one end -->

<x-canva />

@endsection