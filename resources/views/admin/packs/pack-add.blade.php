@extends('layouts.dashboard')

@section('content')

<div class="dashboard__content d-flex">
<x-sidebar />
<div class="dashboard__rightt">
    <div class="dash__content ">
        <!-- sidebar menu -->
        <div class="sidebar__menu d-md-block d-lg-none">
            <div class="sidebar__action"><i class="fa-sharp fa-regular fa-bars"></i> Sidebar</div>
        </div>
        <!-- sidebar menu end -->
        <div class="max-w-2xl mx-auto mt-10 bg-white p-10 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-6 text-gray-800">Ajouter un Pack</h2>
            
            <form action="" method="POST">
                @csrf
                
                <!-- Nom du Pack -->
                <div class="mb-6">
                    <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Nom du Pack</label>
                    <input type="text" id="name" name="name" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Entrez le nom du pack">
                </div>

                <!-- Tag du Pack -->
                <div class="mb-6">
                    <label for="tag" class="block text-lg font-medium text-gray-700 mb-2">Tag</label>
                    <input type="text" id="tag" name="tag" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Ex: Essentiel, Pro, Elite">
                </div>

                <!-- Sélection des caractéristiques (Checkboxes) -->
                <div class="mb-6">
                    <label class="block text-lg font-medium text-gray-700 mb-2">Caractéristiques</label>
                    <div class="mt-3 space-y-3">
                        <label class="flex items-center text-lg">
                            <input type="checkbox" name="features[]" value="1" class="form-checkbox text-blue-600 w-6 h-6">
                            <span class="ml-3">Accès illimité</span>
                        </label>
                        <label class="flex items-center text-lg">
                            <input type="checkbox" name="features[]" value="2" class="form-checkbox text-blue-600 w-6 h-6">
                            <span class="ml-3">Support 24/7</span>
                        </label>
                        <label class="flex items-center text-lg">
                            <input type="checkbox" name="features[]" value="3" class="form-checkbox text-blue-600 w-6 h-6">
                            <span class="ml-3">Analyse avancée</span>
                        </label>
                        <label class="flex items-center text-lg">
                            <input type="checkbox" name="features[]" value="4" class="form-checkbox text-blue-600 w-6 h-6">
                            <span class="ml-3">Stockage supplémentaire</span>
                        </label>
                        <label class="flex items-center text-lg">
                            <input type="checkbox" name="features[]" value="5" class="form-checkbox text-blue-600 w-6 h-6">
                            <span class="ml-3">Intégration API</span>
                        </label>
                    </div>
                </div>

                <!-- Bouton de soumission -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-purple-600 text-white font-semibold py-3 text-lg rounded-lg hover:bg-purple-700 transition duration-200">
                        Ajouter le Pack
                    </button>
                </div>
            </form>
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

