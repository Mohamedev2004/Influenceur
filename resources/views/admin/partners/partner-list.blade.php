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
        <div class="flex items-center justify-right">
            <a href="{{route('partneradd')}}">
                <button class="bg-purple-600 text-white mt-4 mb-4 py-1 px-3 rounded-md hover:bg-purple-900">Ajouter un Partenaire</button>
            </a>
        </div>
        <!-- sidebar menu end -->

        <h6 class="fw-semibold mb-30">Liste des Partenaires</h6>
        <div class="mb-4">
            <input type="text" id="searchInput" placeholder="Rechercher un partenaire..."
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="tab-content" id="myTabContent">
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
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('partneredit') }}" class="action__item">
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
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('partneredit') }}" class="action__item">
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
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('partneredit') }}" class="action__item">
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
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('partneredit') }}" class="action__item">
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