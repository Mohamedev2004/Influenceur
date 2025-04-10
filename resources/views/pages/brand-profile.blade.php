@extends('layouts.app')

@section('content')

<style>
    .video__section__content {
    position: relative !important;
    display: flex !important;
    align-items: center !important;
    aspect-ratio: 16 / 9 !important; /* Keeps a video-like proportion */
    overflow: hidden !important;
}

.video__section__content img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}
</style>

<!-- breadcrumb area -->
<div class="rts__section breadcrumb__background">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative d-flex justify-content-between align-items-center">
                <div class="breadcrumb__area max-content breadcrumb__padding">
                    <div class="rts__job__card__big bg-transparent p-0 position-relative z-1 flex-wrap justify-content-between d-flex gap-4 align-items-center">
                        <div class="d-flex gap-4 align-items-center flex-md-row flex-column mx-auto mx-md-0">
                            <div class="company__icon rounded-2 bg-white">
                                <!-- Display brand logo -->
                                <img src="{{ asset('storage/' . $brand->logo_image) }}" alt="{{ $brand->brandName }}">
                            </div>
                            <div class="job__meta w-100 d-flex text-center text-md-start flex-column gap-2">
                                <div class="">
                                    <!-- Display brand name -->
                                    <h3 class="job__title h3 mb-0 text-white">{{ $brand->brandName }}</h3>
                                </div>
                                <div class="d-flex gap-3 justify-content-center justify-content-md-start flex-wrap mb-3 mt-2">
                                    <!-- Display brand location -->
                                    <div class="d-flex gap-2 align-items-center">
                                        {{ $brand->brandLocalisation ?? 'Location not available' }}
                                    </div>
                                    <!-- Display collaboration type -->
                                    <div class="d-flex gap-2 align-items-center">
                                        {{ $brand->collaboration->name  }}
                                    </div>
                                    <!-- Display brand size -->
                                    <div class="d-flex gap-2 align-items-center">
                                        {{ $brand->brandSize }}
                                    </div>
                                    <!-- Display the brand's monthly salary range (if any) -->
                                    {{-- <div class="d-flex gap-2 fw-medium align-items-center">
                                        $1000 - $2000 Monthly
                                    </div> --}}
                                </div>
                                <div class="job__tags d-flex justify-content-center justify-content-md-start flex-wrap gap-3">
                                    <!-- Display the sector where the brand works -->
                                    <a href="#">{{ $brand->sector->name  }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__area__shape d-flex gap-4 justify-content-end align-items-center">
                    <div class="shape__one common"></div>
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

<!-- job list one -->
<div class="rts__section section__padding">
    <div class="container">
        <div class="row g-30">
            <div class="col-lg-8">
                <div class="rts__job__details">
                    <!-- Tab Navigation -->
                    <div class="rts__tab active__link mb-30">
                        <nav>
                            <div class="nav nav-tabs">
                                <a class="nav-link active" href="#all">All</a>
                                <a class="nav-link" href="#description">Description</a>
                                <a class="nav-link" href="#images">Images</a>
                                <a class="nav-link" href="#video">Video</a>
                            </div>
                        </nav>
                    </div>

                    <!-- Brand Description -->
                    <div id="description" class="mb-30">
                        <h6 class="fw-semibold mb-20">Description de la Marque</h6>
                        <p>{{ $brand->brandDescription ?? 'Description not available' }}</p>
                    </div>

                    <!-- Brand Images Section -->
                    <div id="images" class="mb-30">
                        <h6 class="fw-semibold mb-30 mt-30">Images</h6>
                        <div class="row g-30 row-cols-lg-2 row-cols-xl-3 row-cols-sm-2 row-cols-1">
                            @foreach ($posts as $post)
                                @if ($post->images)
                                    @foreach (json_decode($post->images, true) as $image)
                                        <div class="col">
                                            <img class="rounded-2" src="{{ asset('storage/' . $image) }}" alt="">
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>


                    <!-- Brand Video Section -->
                    <div class="video__section mt-40" id="video">
                        <h5 class="mb-30 d-block">Video</h5>
                        <div class="video__section__content">
                            @foreach ($posts as $post)
                                @if ($post->video)
                                    <img style="object-fit:cover" src="assets/img/breadcrumb/videoimage.jpg" alt="">
                                    <a href="{{ asset('storage/' . $post->video) }}" class="video__play__btn" title="Play Video" data-lightbox>
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                @else
                                <img style="object-fit:cover" src="assets/img/breadcrumb/videoimage.jpg" alt="">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brand Sidebar (Company Info) -->
            <div class="col-lg-4 d-flex flex-column gap-40">
                <div class="company__card">
                    <div class="icon">
                        <img src="{{ asset('storage/' . $brand->logo_image) }}" alt="Brand Logo">
                    </div>
                    <h5 class="company__name mt-20">{{ $brand->brandName }}</h5>
                    <a href="#contact" class="rts__btn apply__btn mt-40">Contacter</a>
                </div>

                <!-- Brand Contact Form -->
                <div class="job__contact" id="contact">
                    <h6 class="fw-semibold mb-20">Contact {{ $brand->brandName }}</h6>
                    <form action="#" class="d-flex flex-column gap-4">
                        <div class="search__item">
                            <label for="gemail" class="mb-3 font-20 fw-medium text-dark text-capitalize">E-mail</label>
                            <div class="position-relative">
                                <input type="email" id="gemail" placeholder="Votre email">
                            </div>
                        </div>

                        <div class="search__item">
                            <label for="phone" class="mb-3 font-20 fw-medium text-dark text-capitalize">Phone</label>
                            <div class="position-relative">
                                <input type="text" id="phone" placeholder="(+212) 154-678789">
                            </div>
                        </div>

                        <div class="search__item">
                            <label class="mb-3 font-20 fw-medium text-dark text-capitalize" for="message">Votre Message</label>
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="rts__btn apply__btn w-100">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- job list one end -->

<!-- top employer -->
<!-- top employer -->
<!-- top employer -->
<div class="rts__section pb-120 overflow-hidden">
    <div class="container">
        <div class="row justify-content-center position-relative">
            <div class="col-xl-6 col-lg-10">
                <div class="rts__section__content text-center mb-60">
                    <h3 class="rts__section__title section__mb">Autres Marques</h3>
                </div>
            </div>
            <div class="rts__slider__control d-none d-md-flex style-gray z-3 w-100 justify-content-between g-0 position-absolute top-50 translate-middle-y">
                <div class="rts__slide__next slider__btn"><i class="fa-sharp fa-solid fa-chevron-left"></i></div>
                <div class="rts__slide__prev slider__btn"><i class="fa-sharp fa-solid fa-chevron-right"></i></div>
            </div>
        </div>
        <div class="row swiper-data overflow-hidden" data-swiper='{
            "slidesPerView": 4.1,
            "autoplay": true,
            "loop": true,
            "navigation": {
                "nextEl": ".rts__slide__next",
                "prevEl": ".rts__slide__prev"
            },
            "breakpoints": {
                "0": {
                    "slidesPerView": 1.05
                },
                "576": {
                    "slidesPerView": 1.05
                },
                "768": {
                    "slidesPerView": 2.05
                },
                "992": {
                    "slidesPerView": 3.05
                },
                "1200": {
                    "slidesPerView": 4.05
                }
            }
        }'>
            <div class="swiper-wrapper">
                @foreach($brands as $brand)
                    <div class="swiper-slide">
                        <div class="rts__job__card style__five">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="company__icon">
                                    <img src="{{ asset('assets/img/home-1/company/' . $brand->logo_image) }}" alt="">
                                </div>
                                {{-- <div class="featured__option">
                                    <span><a style="color: black;" href="{{ route('brandprofile', ['brand' => $brand->id]) }}">Voir Profil</a></span>
                                </div> --}}
                            </div>
                            <div class="d-flex gap-3 mt-4 flex-wrap">
                                <div class="d-flex gap-2 align-items-center font-sm">
                                    {{ $brand->brandLocalisation  }}
                                </div>
                                <div class="d-flex gap-2 align-items-center font-sm">
                                    {{ $brand->sector->name  }}
                                </div>
                            </div>
                            <div class="font-20 fw-medium job__title mt-3 mb-2">
                                <a href="#" aria-label="job" class="job__title">
                                    {{ $brand->brandName }}
                                </a>
                            </div>
                            <p>{{ \Illuminate\Support\Str::limit($brand->brandDescription, 60) }}</p>
                            <div class="job__tags d-flex flex-wrap gap-2 mt-4">
                                <a href="#">{{ $brand->brandSize ?? 'Size' }}</a>
                                <a href="#">{{ $brand->collaboration->name }}</a>
                                @if (auth()->check())
                                {{-- Utilisateur connecté (auth) --}}
                                <a style="background-color:var(--rts-primary); color: white;" href="{{ route('show_brand_auth', ['id' => $brand->id]) }}">
                                    Voir Profil
                                </a>
                            @else
                                {{-- Utilisateur non connecté (guest) --}}
                                <a style="background-color:var(--rts-primary); color: white;" href="{{ route('show_brand_guest', ['id' => $brand->id]) }}">
                                    Voir Profil
                                </a>
                            @endif


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- top employer end -->

<!-- top employer end -->

<!-- top employer end -->

<x-canva />


@endsection
