<!-- header area -->
<header class="rts__section rts__dashboard__header position-fixed w-100">
        <div class="container-fluid g-0">
            <div class="rts__menu__background mw-100 px-20 mobile__padding rounded-0">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="rts__logo">
                            <a href="index.html">
                            <img class="logo__image" src="{{asset('assets/img/logo/logo.svg')}}" width="160" height="40" alt="logo">
                        </a>
                        </div>
                        <div class="navigation d-none d-lg-block">
                            <nav class="navigation__menu" id="offcanvas__menu">
                                <ul class="list-unstyled">
                                        <li class="space">
                                            <a href="{{route('welcome')}}" class="navigation__menu--item__link">Home</a>
                                        </li>

                                        <li class="space">
                                            <a href="{{route('influencers')}}" class="navigation__menu--item__link">Mission influenceur(euse)
                                            </a>
                                            
                                        </li>

                                        <li class="space">
                                            <a href="{{route('brands')}}" class="navigation__menu--item__link">Marques & Entreprises
                                            </a>
                                            
                                        </li>


                                        <li class="space">
                                            <a href="{{route('sponsoring')}}" class="navigation__menu--item__link">Sponsoring</a>
                                            
                                        </li>
                                    </ul>
                            </nav>
                        </div>

                        <div class="rts__menu d-flex gap-5 gap-lg-4 gap-xl-5 align-items-center">

                            <div class="header__right__btn d-flex align-items-center gap-30">
                                <div class="user__info ">
                                    <div class="d-flex gap-3 align-items-center pointer" data-bs-toggle="dropdown">
                                        <div class="user__image if__employer">
                                            <img class="rounded-5" width="48" height="48" src="{{asset('assets/img/icon/google-small.svg')}}" alt="">
                                        </div>
                                        <div class="user__name d-none d-xl-block">
                                        </div>
                                    </div>
                                </div>
                                <a href="employer-dash-jobpost.html" class="small__btn d-none d-sm-flex d-xl-flex fill__btn border-6 font-xs" aria-label="Job Posting Button">Se Déconnecter</a>
                                <button class="d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><i class="fa-sharp fa-regular fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->