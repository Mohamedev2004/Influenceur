@extends('layouts.app')

@section('content')

<!-- banner area -->
<section class="rts__banner overflow-hidden rts__section home__three__banner ">
    <div class="rts__banner__background">
    </div>
    <div class="container">
        <div class="row">
            <div class="rts__banner__wrapper d-flex flex-wrap flex-lg-nowrap gap-5 justify-content-between align-items-center">
                <div class="rts__banner__content max-750">
                    <h1 class="rts__banner__title wow animated fadeInUp ">
                        Nous vous rapprochons des marques, vous créez le contenu.
                    </h1>
                    <p class="rts__banner__desc my-40 br-lg-none  wow animated fadeInUp">
                        Collaborez en toute simplicité <br> Nous vous connectons aux marques, vous laissez parler votre créativité !
                    </p>
                    <div class="mybuttons">
                    <button type="submit" class="signin" aria-label="Search" > <a style="color:white" href="{{route('register')}}">Rejoignez-nous</a> </button>
                    <button type="submit" class="signin" aria-label="Search" > <a style="color:white" href="{{route('login')}}">Se Connecter</a> </button>
                    </div>
                </div>
                <div class="rts__banner__image position-relative">
                    <figure class="banner__image">
                        <img src="assets/img/home-3/banner/man.png" alt="banner">
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



<!-- work process area -->
<section class="rts__section section__padding">
    <div class="container">
        <div class="row align-items-center justify-content-center g-30">
            <div class="col-lg-5 offset-xl-1 col-xl-5">
                <div class="rts__workprocess__image">
                    <img src="assets/img/home-3/about/about-image.webp" alt="">
                    <div class="rts__applicants  wow animated fadeInLeft">
                        <span class="font-20 mb-3 d-block fw-medium">Nouveau Applicants</span>
                        <div class="applicant__list">
                            
                            <div class="single__list">
                                <img src="assets/img/author/1.svg" alt="">
                            </div>
                            <div class="single__list">
                                <img src="assets/img/author/2.svg" alt="">
                            </div>
                            <div class="single__list">
                                <img src="assets/img/author/3.svg" alt="">
                            </div>
                            <div class="single__list">
                                <img src="assets/img/author/4.svg" alt="">
                                <div class="icon-plus"><i class="fa-sharp fa-solid fa-plus"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-6">
                <div class="rts__workprocess__content mx-0 mx-lg-5  wow animated fadeInUp">
                    <div class="rts__section__content text-start">
                        <h3 class="rts__section__title mb-3">Comment fonctionne Cocollab ?</h3>
                        <p class="rts__section__desc">Explorez une multitude de campagnes pour mettre en avant votre créativité.</p>
                    </div>
                    <div class="single__feature__list">
                        
                        <div class="single__item d-flex align-items-start flex-wrap flex-sm-nowrap gap-4">
                            <div class="">
                                <div class="icon">
                                    <img src="assets/img/icon/check.svg" alt="">
                                </div>
                            </div>
                            <div class="content">
                                <span class="h6 d-block">Participez</span>
                                <p>Choisissez des marques et des campagnes.</p>
                            </div>
                        </div>
                        <div class="single__item d-flex align-items-start flex-wrap flex-sm-nowrap gap-4">
                            <div class="">
                                <div class="icon">
                                    <img src="assets/img/icon/check.svg" alt="">
                                </div>
                            </div>
                            <div class="content">
                                <span class="h6 d-block">Créez du contenu</span>
                                <p>Créez du contenu viral et captivant.</p>
                            </div>
                        </div>
                        <div class="single__item d-flex align-items-start flex-wrap flex-sm-nowrap gap-4">
                            <div class="">
                                <div class="icon">
                                    <img src="assets/img/icon/check.svg" alt="">
                                </div>
                            </div>
                            <div class="content">
                                <span class="h6 d-block">Paiement</span>
                                <p>Recevez votre paiement.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work process area end -->

<!-- featured job area -->
    <section class="rts__section section__padding featured__job featured__bg">
    <div class="container">
        <div class="row justify-content-between g-4 mb-60">
            <div class="col-xl-6 col-lg-10">
                <div class="rts__section__content text-start  wow animated fadeInUp">
                    <h3 class="rts__section__title section__mb">Nos Influenceurs</h3>
                    <p class="rts__section__desc">Votre communication digitale avec l’Agence Influenceur</p>
                </div>
            </div>
            <div class="d-flex align-items-end max-content">
                <a href="{{route('allinfluencers')}}" class="text-white d-flex gap-2 align-items-center" style="font-size: 20px; font-weight: bolder; text-decoration:underline">Voir Tout</a>
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
                            <button class="apply__btn">Voir Profil</button>
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
                            <button class="apply__btn">Voir Profil</button>
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
                            <button class="apply__btn">Voir Profil</button>
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
                            <button class="apply__btn">Voir Profil</button>
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
                            <button class="apply__btn">Voir Profil</button>
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