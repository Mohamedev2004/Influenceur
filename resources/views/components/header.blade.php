<!-- header area -->
<header class="rts__section rts__header absolute__header">
    <div class="container-none">
        <div class="rts__menu__background">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="rts__logo">
                        <a href="{{route('welcome')}}">
                        <img class="logo__image" src="assets/img/logo/logo.svg" width="160" height="40" alt="logo">
                    </a>
                    </div>
                    <div class="rts__menu d-flex gap-5 gap-lg-4 gap-xl-5 align-items-center">
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

                        <div class="header__right__btn d-flex gap-3">

                            @if (auth()->check() && auth()->user()->isInfluencer())
                                <a href="{{ route('influencer_dashboard') }}" class="small__btn d-none d-sm-flex no__fill__btn border-6 font-xs">Profil</a>
                            @endif

                            @if (auth()->check() && auth()->user()->isBrand())
                             {{-- {{ dd(auth()->user()) }} --}}
                            <a href="{{ route('brand_display') }}" class="small__btn d-none d-sm-flex no__fill__btn border-6 font-xs">Profil</a>
                        @endif
                            @guest
                                <a href="{{route('login')}}" class="small__btn d-none d-sm-flex no__fill__btn border-6 font-xs">Se Connecter</a>
                            @endguest

                            <button class="d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><i class="fa-solid fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
