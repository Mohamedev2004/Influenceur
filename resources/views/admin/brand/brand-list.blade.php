@extends('layouts.dashboard')

@section('content')

<div class="dashboard__content d-flex">
<x-sidebar />
<div class="dashboard__rightt">
    <div class="dash__content ">
        <!-- sidebar menu -->
        <div class="sidebar__menu d-md-block d-lg-none">
            <div class="sidebar__action"> Sidebar</div>
        </div>
        <!-- sidebar menu end -->

        <h6 class="fw-semibold mb-30">Liste des Marques</h6>
        <div class="mb-4">
            <input type="text" id="searchInput" placeholder="Rechercher un influenceur..."
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>
        <div class="candidate__filter__area">
            <h6 class="font-20">Statistiques</h6>
            <div class="candidate__filter">
                <ul class="candidate__filter__shorting" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Total: 10</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Actif: 6</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Innactif: 4</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="short__list__candidate">
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/1.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->

                    <!-- pagination -->
                    <div class="rts__pagination d-block mx-auto pt-40 max-content">
                        <ul class="d-flex gap-2">
                            <li><a href="#" class="inactive"><i class="rt-chevron-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="rt-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- pagination end -->

                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="short__list__candidate">
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                   <!-- single item -->
                   <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                </div>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="short__list__candidate">
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item -->
                    <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->
                   <!-- single item -->
                   <div class="single__shortlist__item">
                        <div class="author__info">
                            <div class="author__meta">
                                <div class="author__image">
                                    <img src="{{asset('assets/img/author/2.svg')}}" alt="">
                                </div>
                                <div class="author__name">
                                    <h6 class="fw-semibold mb-1">Mark Anthony</h6>
                                    <p class="mb-0">UX Designer</p>
                                </div>
                            </div>
                            <div class="author__info__list">
                                <span> Newyork, USA</span>
                                <span> 1 Year Ago</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('brandstatus') }}" class="action__item">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->


                </div>
            </div>
        </div>
        
    </div>

    <div class="d-flex justify-content-center mt-30">
    <p class="copyright" style="font-size: 15px !important;">Copyright © 2025 All Rights Reserved by cocollab</p>
    </div>
</div>
</div>
</div>
<!-- content area end -->

<x-canva />

@endsection