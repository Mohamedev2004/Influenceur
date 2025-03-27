@extends('layouts.dashboard')

@section('content')

<div class="dashboard__content d-flex">
<x-sidebar />
<div class="dashboard__rightt">
    <div class="dash__content ">
        <!-- sidebar menu -->
        <div class="sidebar__menu d-md-block d-lg-none">
            <div class="sidebar__action"><i class="fa-solid fa-bars"></i> Sidebar</div>
        </div>
        <!-- sidebar menu end -->

        <h6 class="fw-semibold mb-30">Status d'Influenceur(euse)</h6>
        <form action="" method="POST" class="p-4 border rounded-lg shadow w-80">
            @csrf
            <div class="flex items-center gap-4 mb-4">
                <!-- Photo de l'utilisateur -->
                <img src="{{asset('assets/img/author/1.svg')}}" alt="Photo de l'utilisateur" class="w-40 h-40 rounded-full border">
                
                <!-- Nom de l'utilisateur -->
                <div>
                    <p class="text-lg font-bold">John Doe</p>
                    <p class="text-sm text-gray-500">Utilisateur</p>
                </div>
            </div>

            <!-- Sélecteur de statut -->
            <label for="status" class="block font-bold mb-2">Statut :</label>
            <select name="status" id="status" class="px-4 py-2 border rounded w-full">
                <option value="inactif" selected>Inactif</option>
                <option value="actif">Actif</option>
            </select>

            <!-- Bouton de soumission -->
            <button type="submit" style="background-color: #9C04FF !important;" class="mt-4 px-4 py-2 bg-purple text-white rounded w-full">
                Mettre à jour
            </button>
        </form>
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

