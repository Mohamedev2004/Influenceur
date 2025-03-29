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
                    <!-- Total Count -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            Total: {{ $total }}
                        </button>
                    </li>

                    <!-- Active Count -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            Actif: {{ $active }}
                        </button>
                    </li>

                    <!-- Inactive Count -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            Inactif: {{ $inactive }}
                        </button>
                    </li>
                </ul>
            </div>
        </div>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                @foreach($brands as $brand)
                <div class="single_shortlist_item flex items-start space-x-6 p-4 border-b border-gray-200">
                    <!-- Image Section -->
                    <div class="author__image w-24 h-24 rounded-full overflow-hidden">
                        <img src="{{ asset($brand->logo_image) }}" alt="{{ $brand->brandName }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Information Section -->
                    <div class="author__info flex-1">
                        <div class="author__meta">
                            <div class="author__name max-w-xs">
                                <h6 class="fw-semibold text-lg font-semibold text-gray-800">{{ $brand->brandName }}</h6>
                                <p class="text-sm text-gray-500">{{ $brand->sector->name }}</p>
                            </div>
                        </div>
                        <div class="author_info_list mt-2 text-sm text-gray-600">
                            <span>Localisation: {{ $brand->brandLocalisation }}</span><br>
                            <span>Statut: {{ $brand->user->status }}</span>
                        </div>
                    </div>

                    <!-- Buttons Section -->
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('brandstatus', $brand->id) }}" class="action__item">
                            <button class="bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 transition-all ease-in-out duration-200 w-full">
                                Modifier
                            </button>
                        </a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition-all ease-in-out duration-200 w-full">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                @foreach($activeBrands as $brand)
                <div class="single_shortlist_item flex items-start space-x-6 p-4 border-b border-gray-200">
                    <!-- Image Section -->
                    <div class="author__image w-24 h-24 rounded-full overflow-hidden">
                        <img src="{{ asset($brand->logo_image) }}" alt="{{ $brand->brandName }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Information Section -->
                    <div class="author__info flex-1">
                        <div class="author__meta">
                            <div class="author__name max-w-xs">
                                <h6 class="fw-semibold text-lg font-semibold text-gray-800">{{ $brand->brandName }}</h6>
                                <p class="text-sm text-gray-500">{{ $brand->sector->name }}</p>
                            </div>
                        </div>
                        <div class="author_info_list mt-2 text-sm text-gray-600">
                            <span>Localisation: {{ $brand->brandLocalisation }}</span><br>
                            <span>Statut: {{ $brand->user->status }}</span>
                        </div>
                    </div>

                    <!-- Buttons Section -->
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('brandstatus', $brand->id) }}" class="action__item">
                            <button class="bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 transition-all ease-in-out duration-200 w-full">
                                Modifier
                            </button>
                        </a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition-all ease-in-out duration-200 w-full">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                @foreach($inactiveBrands as $brand)
                <div class="single_shortlist_item flex items-start space-x-6 p-4 border-b border-gray-200">
                    <!-- Image Section -->
                    <div class="author__image w-24 h-24 rounded-full overflow-hidden">
                        <img src="{{ asset($brand->logo_image) }}" alt="{{ $brand->brandName }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Information Section -->
                    <div class="author__info flex-1">
                        <div class="author__meta">
                            <div class="author__name max-w-xs">
                                <h6 class="fw-semibold text-lg font-semibold text-gray-800">{{ $brand->brandName }}</h6>
                                <p class="text-sm text-gray-500">{{ $brand->sector->name }}</p>
                            </div>
                        </div>
                        <div class="author_info_list mt-2 text-sm text-gray-600">
                            <span>Localisation: {{ $brand->brandLocalisation }}</span><br>
                            <span>Statut: {{ $brand->user->status }}</span>
                        </div>
                    </div>

                    <!-- Buttons Section -->
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('brandstatus', $brand->id) }}" class="action__item">
                            <button class="bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 transition-all ease-in-out duration-200 w-full">
                                Modifier
                            </button>
                        </a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 transition-all ease-in-out duration-200 w-full">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
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
