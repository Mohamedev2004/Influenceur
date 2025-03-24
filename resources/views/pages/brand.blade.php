@extends('layouts.app')

@section('content')
<style>
    .apply__btn a{
        color: black;
    }
    .apply__btn a:hover{
        color: white;
    }
</style>

<!-- banner area -->
<section class="rts__banner overflow-hidden rts__section home__three__banner ">
    <div class="rts__banner__background">
    </div>
    <div class="container">
        <div class="row">
            <div class="rts__banner__wrapper d-flex flex-wrap flex-lg-nowrap gap-5 justify-content-between align-items-center">
                <div class="rts__banner__content max-750">
                    <h1 class="rts__banner__title wow animated fadeInUp ">
                        Booster votre marque avec du contenu authentique.
                    </h1>
                    <p class="rts__banner__desc my-40 br-lg-none  wow animated fadeInUp">
                        Créez un impact durable en racontant votre histoire avec authenticité. <br> Attirez, engagez et fidélisez votre audience grâce à un contenu qui reflète vos valeurs !
                    </p>
                    <div class="mybuttons">
                        <button type="submit" class="signin" aria-label="Search" > <a style="color:white" href="{{route('register')}}">Rejoignez-nous</a> </button>
                        <button type="submit" class="signin" aria-label="Search" > <a style="color:white" href="{{route('login')}}">Se Connecter</a> </button>
                    </div>
                </div>
                <div class="rts__banner__image position-relative">
                    <figure class="banner__image">
                        <img src="assets/img/home-3/banner/woman.png" alt="banner">
                    </figure>
                    <div class="banner__image__shape">
                        <div class="facebook">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                    <div class="current__job d-flex gap-3">
                        <div class="rts__icon">
                            <img src="assets/img/icon/job.svg" alt="">
                        </div>
                        <div class="rts__text">
                            <span class="h5 mb-0">80+</span>
                            <span>Influenceur</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner area end -->



<!-- pricing section -->
<div class="rts__section pt--10 " style="padding-top: 80px; padding-bottom: 80px;">
<div class="container">
    <div class="row position-relative justify-content-lg-between justify-content-sm-center gap-4 mb-60">
        <div class="col-xl-6 col-lg-10">
            <div class="rts__section__content text-md-start text-sm-center">
                <h3 class="rts__section__title section__mb">Nos packs</h3>
                <p class="rts__section__desc">Trouvez le plan qui vous convient</p>
            </div>
        </div>
    </div>

    <div class="monthly__pricing active">
        <div class="row g-30">
            <div class="col-lg-5 col-xl-4 col-md-6">
                <div class="rts__pricing__box">
                    <div class="h6 fw-medium lh-1 mb-2 text-primary">Tag</div>
                    <div class="plan__price lh-1 mb-40"><span class="h2">Nom</span></div>
                    <ul class="plan__feature">
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                    </ul>
                    <a href="#" class="rts__btn pricing__btn  no__fill__btn mt-40">S'abonner</a>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 col-md-6">
                <div class="rts__pricing__box">
                    <div class="h6 fw-medium lh-1 mb-2 text-primary">Tag</div>
                    <div class="plan__price lh-1 mb-40"><span class="h2">Nom</span></div>
                    <ul class="plan__feature">
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                    </ul>
                    <a href="#" class="rts__btn pricing__btn  no__fill__btn mt-40">S'abonner</a>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 col-md-6">
                <div class="rts__pricing__box">
                    <div class="h6 fw-medium lh-1 mb-2 text-primary">Tag</div>
                    <div class="plan__price lh-1 mb-40"><span class="h2">Nom</span></div>
                    <ul class="plan__feature">
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                        <li> Benefice</li>
                    </ul>
                    <a href="#" class="rts__btn pricing__btn  no__fill__btn mt-40">S'abonner</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- pricing section end -->

<!-- featured job area -->
    <section class="rts__section section__padding featured__job featured__bg">
    <div class="container">
        <div class="row justify-content-between g-4 mb-60">
            <div class="col-xl-6 col-lg-10">
                <div class="rts__section__content text-start  wow animated fadeInUp">
                    <h3 class="rts__section__title section__mb">Nos Marques</h3>
                    <p class="rts__section__desc">Votre communication digitale avec l’Agence Influenceur</p>
                </div>
            </div>
            <div class="d-flex align-items-end max-content">
                <a href="{{route('allbrands')}}" class="text-white d-flex gap-2 align-items-center" style="font-size: 20px; font-weight: bolder; text-decoration:underline">Voir Tout</a>
            </div>
        </div>
        <div class="row px-3 d-flex flex-column g-30">
            
            <!-- single job item -->
            <div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
                <div class="company__icon">
                    <img style="border-radius: 100px;" src="assets/img/author/2.svg" alt="">
                </div>
                <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
                    <div class="job__meta">
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <a href="job-details-3.html" class="job__title h6 fw-semibold">Ahmed BenHamda</a>
                        </div>
                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                            <div class="d-flex gap-2 align-items-center">
                                    Fitness
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    100.000 Abonnés
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    20 Days Ago
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
                        <div class="job__tags d-flex flex-wrap gap-3">
                            <a href="#">Instagram</a>
                            <a href="#">Tiktok</a> 
                        </div>
                        <div class="d-flex gap-3 flex-wrap">
                            <button class="apply__btn"><a href="{{route('brandprofile')}}">Voir Profil</a></button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- single job item end --> 
            <!-- single job item -->
            <div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
                <div class="company__icon">
                    <img style="border-radius: 100px;" src="assets/img/author/3.svg" alt="">
                </div>
                <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
                    <div class="job__meta">
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <a href="job-details-3.html" class="job__title h6 fw-semibold">Marwan Semlali</a>
                        </div>
                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                            <div class="d-flex gap-2 align-items-center">
                                    Vlogs
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    250.000 Abonnés
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    30 Days Ago
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
                        <div class="job__tags d-flex flex-wrap gap-3">
                            <a href="#">Instagram</a>
                            <a href="#">facebook</a> 
                        </div>
                        <div class="d-flex gap-3 flex-wrap">
                        <button class="apply__btn"><a href="{{route('brandprofile')}}">Voir Profil</a></button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- single job item end --> 
            <!-- single job item -->
            <div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
                <div class="company__icon">
                    <img style="border-radius: 100px;" src="assets/img/author/4.svg" alt="">
                </div>
                <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
                    <div class="job__meta">
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <a href="job-details-3.html" class="job__title h6 fw-semibold">Rachid Elmlih</a>
                        </div>
                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                            <div class="d-flex gap-2 align-items-center">
                                    IT
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    290.000 Abonnés
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    30 Days Ago
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
                        <div class="job__tags d-flex flex-wrap gap-3">
                            <a href="#">Instagram</a>
                            <a href="#">facebook</a> 
                        </div>
                        <div class="d-flex gap-3 flex-wrap">
                        <button class="apply__btn"><a href="{{route('brandprofile')}}">Voir Profil</a></button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- single job item end --> 
            <!-- single job item -->
            <div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
                <div class="company__icon">
                    <img style="border-radius: 100px;" src="assets/img/author/2.svg" alt="">
                </div>
                <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
                    <div class="job__meta">
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <a href="job-details-3.html" class="job__title h6 fw-semibold">Ahmed BenHamda</a>
                        </div>
                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                            <div class="d-flex gap-2 align-items-center">
                                    Fitness
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    100.000 Abonnés
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    20 Days Ago
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
                        <div class="job__tags d-flex flex-wrap gap-3">
                            <a href="#">Instagram</a>
                            <a href="#">Tiktok</a> 
                        </div>
                        <div class="d-flex gap-3 flex-wrap">
                        <button class="apply__btn"><a href="{{route('brandprofile')}}">Voir Profil</a></button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- single job item end --> 
            <!-- single job item -->
            <div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
                <div class="company__icon">
                    <img style="border-radius: 100px;" src="assets/img/author/3.svg" alt="">
                </div>
                <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
                    <div class="job__meta">
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <a href="job-details-3.html" class="job__title h6 fw-semibold">Marwan Semlali</a>
                        </div>
                        <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                            <div class="d-flex gap-2 align-items-center">
                                    Vlogs
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    250.000 Abonnés
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                    30 Days Ago
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
                        <div class="job__tags d-flex flex-wrap gap-3">
                            <a href="#">Instagram</a>
                            <a href="#">facebook</a> 
                        </div>
                        <div class="d-flex gap-3 flex-wrap">
                        <button class="apply__btn"><a href="{{route('brandprofile')}}">Voir Profil</a></button>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- single job item end --> 
        </div>
    </div>
    </section>
<!-- featured job area end -->

<x-canva />

@endsection